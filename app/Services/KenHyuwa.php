<?php 

namespace App\Services;

use GuzzleHttp\Client;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use Illuminate\Support\Str;

class KenHyuwa {

    protected $publish = 'PUBLISHED';
    protected $active = 'ACTIVE';

    public function packagist(int $page, $length) {
        $url = 'https://packagist.org/search.json?q=laravel&type=library&license=MIT&page=';
        $client = new Client;
        $response = $client->get($url . $page);
        $status = $response->getStatusCode();
        if($status = 200) {
            $result = json_decode($response->getBody()->getContents(), true);
            $packagist = [];
            foreach ($result['results'] as $value) {
                array_push($packagist, $value);
            }
            $results = collect($packagist)->shuffle()->filter(function($value, $key) use ($length) {
                return $key < $length;
            });
            $prev = ($page-1 < 1) ? null : $page-1;
            $next = $page+1;
            return [
                'packages' => $results,
                'prev'=> 'packages/' . $prev,
                'next' => 'packages/' . $next
            ];
        }
        return [
            'packages' => [],
            'prev'=> '',
            'next' => ''
        ];
    }

    public function singlePackagist($vendor, $name) {
        $url = 'https://packagist.org/packages/'.$vendor.'/'.$name.'.json';
        $client = new Client;
        $response = $client->get($url);
        $status = $response->getStatusCode();
        if($status = 200) {
            $result = json_decode($response->getBody()->getContents(), true);
            return (object) [
                'name' => $result['package']['name'],
                'description' => $result['package']['description'],
                'maintainers' => $result['package']['maintainers'],
                'versions' => $result['package']['versions'],
                'type' => $result['package']['type'],
                'repository' => $result['package']['repository'],
                'language' => $result['package']['language'],
                'downloads' => $result['package']['downloads'],
            ];
        }
        return [];
    }

    public function github($keyword, $length) {
        $time_start = microtime(true);
        $url = 'https://api.github.com/search/repositories?q=' . $keyword . '&type=project&license=MIT';
        $client = new Client;
        $response = $client->get($url);
        $status = $response->getStatusCode();
        if ($status = 200) {
            $result = json_decode($response->getBody()->getContents(), true);
            $github = [];
            foreach ($result['items'] as $value) {
                array_push($github, $value);
            }
            $items = collect($github)->shuffle()->filter(function($value, $key) use ($length) {
                return $key < $length;
            });
            return [
                'github' => $items
            ];
        }
        return [
            'github' => []
        ];
    }

    public function allPost($limit) {
        $posts = Post::whereStatus($this->publish)->orderBy('created_at', 'desc')->limit($limit)->get();
        if(sizeof($posts) > 0) {
            return [
                'posts' => $posts
            ];
        }
        return [
            'posts' => []
        ];
    }

    public function postByCategory($category) {
        $posts = Post::whereStatus($this->publish)
            ->wherehas('category', function($query) use ($category) {
                $query->where(\DB::raw('lower(name)'), $category);
            })->orderBy('created_at', 'desc')
            ->paginate(4);
        if(sizeof($posts) > 0) {
            return [
                'posts' => $posts,
                'prev' => $posts->previousPageUrl(),
                'next' => $posts->nextPageUrl()
            ];
        }
        return abort(404);
    }

    public function singlePost($category, $slug) {
        $post = Post::whereSlug($slug)
            ->wherehas('category', function($query) use ($category) {
                $query->where(\DB::raw('lower(name)'), $category);
            })->whereStatus($this->publish)
            ->first();
        if($post) {
            return [
                'post' => $post,
                'prev' => $this->getPrev($category, $post),
                'next' => $this->getNext($category, $post)
            ];
        }
        return abort(404);
    }

    public function getPrev($category, $object) {
        $post = Post::where('id', '<', $object->id)
            ->wherehas('category', function($query) use ($category) {
                $query->where(\DB::raw('lower(name)'), $category);
            })->whereStatus($this->publish)
            ->first();
        if($post) {
            return Str::lower($post->category->name).'/'.$post->slug;
        }
        return null;
    }

    public function getNext($category, $object) {
        $post = Post::where('id', '>', $object->id)
            ->wherehas('category', function($query) use ($category) {
                $query->where(\DB::raw('lower(name)'), $category);
            })->whereStatus($this->publish)
            ->first();
        if($post) {
            return Str::lower($post->category->name).'/'.$post->slug;
        }
        return null;
    }

    public function getPage($page) {
        $page = Page::whereSlug($page)->whereStatus($this->active)->first();
        if($page) {
            return [
                'page' => $page
            ];
        }
        return abort(404);
    }
}
