@extends('vendor.KenHyuwa.layouts.app')

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
    <meta property="og:title" content="Tutorial Laravel Indonesia" />
    <meta property="og:description" content="Litepie Tutorial Is A Web Development Tutorial Site For Beginners. In Here You Can Learn Laravel With Indonesia Language. Litepie Tutorial Provides Laravel Tutorial For Beginners, And Other Tutorials" />
    <meta property="og:image" content="{{ asset('/img/logo.png') }}" />
@endsection

@section('content')

<div class="wrapper __blog">
    <div class="container">
        <div class="gutter-blog">
            @foreach ($posts as $key => $v)
                <a href="{{ route('blog.single', ['category'=>strtolower($v->category->name),'slug'=>$v->slug]) }}" class="gutter-item-blog gutter-item-blog-{{ $key+1 }}">
                    <div class="__top">
                        @if ($v->featured == 1)
                            <img src="{{ asset('/storage/'.$v->image) }}" class="img-fluid">
                        @else 
                            <img src="{{ asset('/img/feature.png') }}" class="img-fluid">
                        @endif
                    </div>
                    <div class="__bottom">
                        <h1>
                            {{ ucwords($v->title) }}
                        </h1>
                        <p>
                            {!! str_limit($v->excerpt, $limit = 100, $end = '...') !!}
                        </p>
                    </div>
                </a>
            @endforeach
            <div class="gutter-item-blog-5">
                @include('vendor.KenHyuwa.components.facebook', ['some' => 'data'])
            </div>
            <div class="gutter-item-blog-6" id="partners">
                @include('vendor.KenHyuwa.components.partner', ['some' => 'data'])
            </div>
            <div class="gutter-item-blog-7"></div>
        </div>
    </div>
</div>
@include('vendor.KenHyuwa.components.pagination', ['some' => 'data'])

@endsection