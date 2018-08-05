@extends('vendor.KenHyuwa.layouts.app')

@section('title')
    <title>{{ ucwords($package->description) }}</title>
@endsection

@section('meta')
    <meta name="keywords" content="Tutorial Laravel bahasa indonesia, Laravel tutorial bahasa indonesia, Litepie, Belajar PHP, Belajar php, Belajar CSS3, Belajar css3, Belajar css, Belajar JAVASCRIPT, Belajar javascript, Belajar BOOTSTRAP, Belajar Bootstrap, MySQL, Codeigniter, Laravel, Laravel Indonesia, Belajar Laravel Bahasa Indonesia, Belajar Codeigniter Bahasa Indonesia, laravel, php, framework, web, artisan, taylor otwell, css, javascript, js, cara membuat web, website, adsense, cara cepat, php indonesia, crud, crud laravel, crud laravel 5, belajar laravel 5, di laravel, dilaravel, di php, diphp, di css, dicss, di js, dijs, di javascript, dijavascript, vue js, download aplikasi php, download gratis, gratis, belajar laravel, belajar laravel 5.5, laravel 5.5, laravel-news, sekolah koding, litepie, voyager, laravel-voyager, belajar-laravel, belajar-laravel-5-5, litepie, packages laravel, github, {{ $package->name }}">
    <meta name="description" content="{{ ucwords($package->description) }}">
    
    <!-- Graph -->
    <meta property="fb:app_id" content="210320139437352"/>
    <meta property="og:url" content="{{ url(Request::path()) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Litepie Tutorial" />
    <meta property="og:title" content="{{ $package->name }}" />
    <meta property="og:description" content="{{ ucwords($package->description) }}" />
    <meta property="og:image" content="{{ asset('/img/laravel-packages-medium.png') }}" />
@endsection

@section('content')

@include('vendor.KenHyuwa.advertises.three', ['some' => 'data'])
<div class="wrapper __blog">
    <div class="container">
        <div class="gutter-blog-post">
            <div class="gutter-item-blog gutter-item-blog-post">
                <div class="__top">
                    <img src="{{ asset('/img/laravel-packages.png') }}" class="img-fluid">
                </div>
                <div class="__bottom">
                    <h1>
                        {{ $package->name }}
                    </h1>
                    <label class="label-tags"><i class="fa fa-tags"></i> {{ $package->type }}</label> 
                    <label class="label-tags"><i class="fa fa-tags"></i> {{ $package->language }}</label>
                    <p>
                        {{ $package->description }}
                    </p>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h1>Downloads</h1>
                            <ul class="list-group">
                              @foreach ($package->downloads as $i => $v)
                                  <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ ucwords($i) }}
                                    <span class="badge badge-primary badge-pill">{{ $v }}</span>
                                  </li>
                              @endforeach
                            </ul>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h1>Maintainers</h1>
                            <ul class="list-unstyled">
                              @foreach ($package->maintainers as $v)
                                  <li class="media">
                                    <img class="mr-3" src="{{ $v['avatar_url'] }}" alt="{{ $v['name'] }}">
                                    <div class="media-body">
                                      <h5 class="mt-0 mb-1">{{ $v['name'] }}</h5>
                                    </div>
                                  </li>
                              @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="share-it">
                    <div class="head">
                        <span>Versions</span>
                        <div class="owl-carousel">
                            @foreach ($package->versions as $i => $v)
                                <div class="_devicon">{{ $i }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="share-it">
                    <div class="head">
                        <span>Repository</span>
                        <div>
                            <a href="{{ $package->repository }}" target="_blank">{{ $package->repository }}</a>
                        </div>
                    </div>
                </div>
                <div class="share-it">
                    <span>Share This</span>
                    <div class="litepie-ui-item">
                        <ul class="list-inline">
                            <li>
                                <a data-href="https://www.facebook.com/sharer/sharer.php?u={{ url('packages/'.$package->name) }}&title={{ $package->name }}&description={{ $package->description }}&quote={{ 'Litepie Tutorial' }}" target="_top" data-share="share-it">
                                    <i class="fa fa-facebook facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://twitter.com/intent/tweet?text={{ $package->name }}&url={{ url('packages/'.$package->name) }}&hashtags=litepie_tutorial&via=litepieweb" target="_top" data-share="share-it">
                                    <i class="fa fa-twitter twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://plus.google.com/share?url={{ url('packages/'.$package->name) }}" target="_top" data-share="share-it">
                                    <i class="fa fa-google-plus google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://www.linkedin.com/shareArticle?mini=true&url={{ url('packages/'.$package->name) }}&title={{ $package->name }}&summary={{ $package->description }}" target="_top" data-share="share-it">
                                    <i class="fa fa-linkedin linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://pinterest.com/pin/create/button/?url={{ url('packages/'.$package->name) }}&media=media&description={{ $package->description }}" target="_top" data-share="share-it">
                                    <i class="fa fa-pinterest pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="whatsapp://send?text={{ url('packages/'.$package->name) }}" target="_top" data-share="share-it" data-action="share/whatsapp/share">
                                    <i class="fa fa-whatsapp whatsapp"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://t.me/share/url?url={{ url('packages/'.$package->name) }}&text={{ $package->name }}" target="_top" data-share="share-it">
                                    <i class="fa fa-send telegram"></i>
                                </a>
                            </li>
                            <li>
                                <a data-href="https://web.skype.com/share?url={{ $package->description }}%0D%0A{{ url('packages/'.$package->name) }}" target="_top" data-share="share-it">
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

@endsection