@extends('vendor.KenHyuwa.layouts.special')

@section('title')
    <title>{{ ucwords(Request::segment(1)) }}</title>
@endsection

@section('meta')
    <meta name="keywords" content="Tutorial Laravel bahasa indonesia, Laravel tutorial bahasa indonesia, Litepie, Belajar PHP, Belajar php, Belajar CSS3, Belajar css3, Belajar css, Belajar JAVASCRIPT, Belajar javascript, Belajar BOOTSTRAP, Belajar Bootstrap, MySQL, Codeigniter, Laravel, Laravel Indonesia, Belajar Laravel Bahasa Indonesia, Belajar Codeigniter Bahasa Indonesia, laravel, php, framework, web, artisan, taylor otwell, css, javascript, js, cara membuat web, website, adsense, cara cepat, php indonesia, crud, crud laravel, crud laravel 5, belajar laravel 5, di laravel, dilaravel, di php, diphp, di css, dicss, di js, dijs, di javascript, dijavascript, vue js, download aplikasi php, download gratis, gratis, belajar laravel, belajar laravel 5.5, laravel 5.5, laravel-news, sekolah koding, litepie, voyager, laravel-voyager, belajar-laravel, belajar-laravel-5-5, litepie, packages laravel, github">
    <meta name="description" content="Litepie Tutorial Is A Web Development Tutorial Site For Beginners. In Here You Can Learn Laravel With Indonesia Language. Litepie Tutorial Provides Laravel Tutorial For Beginners, And Other Tutorials">
    
    <!-- Graph -->
    <meta property="fb:app_id" content="210320139437352"/>
    <meta property="og:url" content="{{ url(Request::path()) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Litepie Tutorial" />
    <meta property="og:title" content="A Packages for Laravel Development" />
    <meta property="og:description" content="This is a reference A Packages for Laravel Development" />
    <meta property="og:image" content="{{ asset('/img/laravel-packages-medium.png') }}" />
@endsection

@section('content')

<main class="contents">
    @include('vendor.KenHyuwa.advertises.one', ['some' => 'data'])
    @include('vendor.KenHyuwa.components.packages')
    @include('vendor.KenHyuwa.components.pagination', ['some' => 'data'])
    @include('vendor.KenHyuwa.components.supported', ['some' => 'data'])
    {{-- @include('vendor.KenHyuwa.components.open-source') --}}
    @include('vendor.KenHyuwa.advertises.two', ['some' => 'data'])
</main>

@endsection
