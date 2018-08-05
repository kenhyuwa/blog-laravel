<?php

namespace App\Http\Controllers\KenHyuwa;

use App\Services\KenHyuwa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class KenHyuwaController extends Controller
{
    public function index(KenHyuwa $KenHyuwa) {
        $data = $KenHyuwa->allPost(4);
        return view('vendor.KenHyuwa.welcome', $data);
    }

    public function page(KenHyuwa $KenHyuwa, $page) {
        if($page == 'about-us') {
            return view('vendor.KenHyuwa.pages.about');
        }
        $data = $KenHyuwa->getPage($page);
        return view('vendor.KenHyuwa.pages.index', $data);
    }

    public function packages(KenHyuwa $KenHyuwa, $page = 1) {
        $data = collect($KenHyuwa->packagist($page, 15));
        return view('vendor.KenHyuwa.posts.packages.index', $data);
    }

    public function singlePackagist(KenHyuwa $KenHyuwa, $vendor, $name) {
        $data['package'] = $KenHyuwa->singlePackagist($vendor, $name);
        return view('vendor.KenHyuwa.posts.packages.view', $data);
    }

    public function compose(View $view) {
        $share['packages_share'] = $this->getPackages(1, 6);
        // $share['github_share'] = $this->getGithub(1, 6);
        $view->with($share);
    }

    public function getPackages($page, $length) {
        $KenHyuwa = new KenHyuwa;
        return $KenHyuwa->packagist($page, $length);
    }

    public function getGithub($page, $length) {
        $KenHyuwa = new KenHyuwa;
        return $KenHyuwa->github('sistem-informasi', $length);
    }
}
