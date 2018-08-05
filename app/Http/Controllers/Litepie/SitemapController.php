<?php

namespace App\Http\Controllers\Litepie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Category;

class SitemapController extends Controller
{
    public function index()
    {
        $post = Post::whereStatus('PUBLISHED')->orderBy('updated_at', 'desc')->first();

        return response()->view('vendor.litepie.sitemap.index', [
            'post' => $post,
        ])->header('Content-Type', 'text/xml');
    }

    public function posts()
    {
        $posts = Post::whereStatus('PUBLISHED')
        // ->where('category_id', '!=', 21)
        ->get();
        return response()->view('vendor.litepie.sitemap.posts', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $categories = Category::all();
        return response()->view('vendor.litepie.sitemap.categories', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }

    public function pages()
    {
        $pages = Page::all();
        return response()->view('vendor.litepie.sitemap.pages', [
            'pages' => $pages,
        ])->header('Content-Type', 'text/xml');
    }
}
