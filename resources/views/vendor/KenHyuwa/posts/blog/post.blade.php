@extends('vendor.KenHyuwa.layouts.app')

@section('title')
    <title>{{ ucwords($post->title) }}</title>
@endsection


@php
    if ($post->featured == 1) {
        $image = asset('/storage/'.$post->image);
        $image_medium = asset('/storage/'.$post->thumbnail('medium'));
    } else {
        $image = asset('/img/feature.png');
        $image_medium = asset('/img/feature-medium.png');
    }
@endphp

@section('meta')
    <meta name="keywords" content="Tutorial Laravel bahasa indonesia, Laravel tutorial bahasa indonesia, Litepie, Belajar PHP, Belajar php, Belajar CSS3, Belajar css3, Belajar css, Belajar JAVASCRIPT, Belajar javascript, Belajar BOOTSTRAP, Belajar Bootstrap, MySQL, Codeigniter, Laravel, Laravel Indonesia, Belajar Laravel Bahasa Indonesia, Belajar Codeigniter Bahasa Indonesia, laravel, php, framework, web, artisan, taylor otwell, css, javascript, js, cara membuat web, website, adsense, cara cepat, php indonesia, crud, crud laravel, crud laravel 5, belajar laravel 5, di laravel, dilaravel, di php, diphp, di css, dicss, di js, dijs, di javascript, dijavascript, vue js, download aplikasi php, download gratis, gratis, belajar laravel, belajar laravel 5.5, laravel 5.5, laravel-news, sekolah koding, litepie, voyager, laravel-voyager, belajar-laravel, belajar-laravel-5-5, litepie, packages laravel, github, {{ ucwords($post->keyword) }}">
    <meta name="description" content="{{ ucwords($post->meta_description) }}">
    
    <!-- Graph -->
    <meta property="fb:app_id" content="210320139437352"/>
    <meta property="og:url" content="{{ url(Request::path()) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Litepie Tutorial" />
    <meta property="og:title" content="{{ ucwords($post->title) }}" />
    <meta property="og:description" content="{{ ucwords($post->meta_description) }}" />
    <meta property="og:image" content="{{ $image_medium }}" />
@endsection

@section('content')

        @include('vendor.KenHyuwa.advertises.three', ['some' => 'data'])
<div class="wrapper __blog">
    <div class="container">
        <div class="gutter-blog-post">
            <div class="gutter-item-blog gutter-item-blog-post">
                <div class="__top">
                    <img src="{{ $image }}" class="img-fluid">
                </div>
                <div class="__bottom">
                    <h1>
                        {{ ucwords($post->title) }}
                    </h1>
                    <label class="label-tags"><i class="fa fa-tags"></i>
                     <a href="{{ route('blog', ['category'=>strtolower($post->category->name)]) }}">{{ ucwords($post->category->name) }}</a></label>
                    {!! ucwords($post->body) !!}
                </div>
                <div class="share-it">
                    <span>Share This</span>
                    <div class="litepie-ui-item">
                        <ul class="list-inline">
                            <li>
                                <a data-href="https://www.facebook.com/sharer/sharer.php?u={{ url(strtolower($post->category->name).'/'.$post->slug) }}&title={{ ucwords($post->title) }}&description={{ ucfirst($post->excerpt) }}&quote={{ strtolower($post->category->name) }}" target="_top" data-share="share-it">
                                    <i class="fa fa-facebook facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://twitter.com/intent/tweet?text={{ ucwords($post->title) }}&url={{ url(strtolower($post->category->name).'/'.$post->slug) }}&hashtags={{ strtolower($post->category->name) }}&via=litepieweb" target="_top" data-share="share-it">
                                    <i class="fa fa-twitter twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://plus.google.com/share?url={{ url(strtolower($post->category->name).'/'.$post->slug) }}" target="_top" data-share="share-it">
                                    <i class="fa fa-google-plus google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://www.linkedin.com/shareArticle?mini=true&url={{ url(strtolower($post->category->name).'/'.$post->slug) }}&title={{ ucwords($post->title) }}&summary={{ ucfirst($post->excerpt) }}" target="_top" data-share="share-it">
                                    <i class="fa fa-linkedin linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://pinterest.com/pin/create/button/?url={{ url(strtolower($post->category->name).'/'.$post->slug) }}&media={{ $image_medium }}&description={{ ucfirst($post->excerpt) }}" target="_top" data-share="share-it">
                                    <i class="fa fa-pinterest pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="whatsapp://send?text={{ ucfirst($post->excerpt) }}" target="_top" data-share="share-it" data-action="share/whatsapp/share">
                                    <i class="fa fa-whatsapp whatsapp"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://t.me/share/url?url={{ url(strtolower($post->category->name).'/'.$post->slug) }}&text={{ ucfirst($post->excerpt) }}" target="_top" data-share="share-it">
                                    <i class="fa fa-send telegram"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://web.skype.com/share?url={{ ucfirst($post->excerpt) }}%0D%0A{{ url(strtolower($post->category->name).'/'.$post->slug) }}" target="_top" data-share="share-it">
                                    <i class="fa fa-skype skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('vendor.KenHyuwa.components.pagination', ['some' => 'data'])

@endsection