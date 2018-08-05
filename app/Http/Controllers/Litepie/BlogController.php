<?php

namespace App\Http\Controllers\KenHyuwa;

use TCG\Voyager\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\KenHyuwa;

class BlogController extends Controller
{
    public function index(Request $request, KenHyuwa $KenHyuwa, $category) {
        $data = $KenHyuwa->postByCategory($category);
        return view('vendor.KenHyuwa.posts.blog.index', $data);
    }

    public function post(Request $request, KenHyuwa $KenHyuwa, $category, $slug) {
        $data = $KenHyuwa->singlePost($category, $slug);
        return view('vendor.KenHyuwa.posts.blog.post', $data);
    }
}
