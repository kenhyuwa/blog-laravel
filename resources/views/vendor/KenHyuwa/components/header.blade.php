<div class="mobile-navigation-container clearfix">
    <div class="logo-mobile" >
        <a href="/">
            <img src="{{ asset('/img/logo.png') }}" alt="logo"> <span>Litepie Tutorial</span>
        </a>
    </div>
    <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<header>
    <nav class="navigation">
        <div class="navigation__top container">
            <div class="logo" ><a href="/"><img src="{{ asset('/img/logo.png') }}" alt="logo"></a></div>
            <div class="navigation__search">
                <input type="text" placeholder="Search">
                <span class="fa fa-search errspan" style="float: left;"></span>
            </div>
            <ul class="navigation__main-links">
                <li><a href="{{ route('index') }}">{{ $home }}</a></li>
                <li><a href="{{ route('blog', ['category' => 'blog']) }}">Blog</a></li>
                <li><a href="{{ route('blog', ['category' => 'laravel']) }}">Laravel</a></li>
                <li><a href="{{ route('packages') }}">Packages</a></li>
                {{-- <li><a href="{{ URL('/open-source') }}">Open Source</a></li> --}}
            </ul>
            <ul class="navigation__notifications">
                <li><a href="https://www.facebook.com/diaddemi" target="_blank"><i class="fa fa-facebook i-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://github.com/kenhyuwa" target="_blank"><i class="fa fa-github i-github" aria-hidden="true"></i></a></li>
                <li><a href="https://www.youtube.com/c/onphpidtutorial" target="_blank"><i class="fa fa-youtube-play i-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="navigation__user-info">
            <div class="container">
                <ul>
                    <li><a href="{{ route('page', ['page'=>'disclaimer']) }}">Disclaimer</a></li>
                    <li><a href="{{ route('page', ['page'=>'privacy-policy']) }}">Privacy Policy</a></li>
                    <li><a href="{{ route('page', ['page'=>'about-us']) }}">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>