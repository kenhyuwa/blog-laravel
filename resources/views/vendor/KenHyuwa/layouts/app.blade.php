<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    @yield('title')
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="G4-5AgV-JljiutZ22RgZOJ77oInomQ2w3kvzHvWw3RQ" />
    <meta name="referrer" content="always">
    <meta name="robots" content="all,index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Litepie & Team">
    @yield('meta')

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/owl-carousell/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/owl-carousell/dist/assets/owl.theme.default.min.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="Litepie Tutorial">
    <meta name="application-name" content="Litepie Tutorial">
    <meta name="theme-color" content="#ffffff">
    <script>
      window.Laravel = @json([
        'csrfToken' => csrf_token(),
        'APP_URL' => URL('/'),
        'CURRENT_PATH' => URL(Request::segment(1))
      ]);
    </script>
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '210320139437888', // change this
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@include('vendor.KenHyuwa.components.header', ['home' => 'Go to home'])
<main class="contents" id="app">
    @yield('content')
    @include('vendor.KenHyuwa.advertises.one', ['some' => 'data'])
    @include('vendor.KenHyuwa.components.packages')
    @include('vendor.KenHyuwa.components.supported', ['some' => 'data'])
    {{-- @include('vendor.KenHyuwa.components.open-source') --}}
    @include('vendor.KenHyuwa.advertises.two', ['some' => 'data'])
</main>
@include('vendor.KenHyuwa.components.footer', ['some' => 'data'])
<!-- JavaScript -->
<script src="{{ mix('/js/app.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/languages/go.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.1.0/highlightjs-line-numbers.min.js"></script>
<script src="{{ asset('/owl-carousell/dist/owl.carousel.min.js') }}"></script>
<script>
    // var KenHyuwa = setInterval("litepieRefresher()", 60 * 1000);
    // function litepieRefresher(){self.location.reload(true);}
    /**
     * init highlight JS
     */
    hljs.initHighlightingOnLoad();
    hljs.initLineNumbersOnLoad();
    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });
    $('code.hljs').each(function(i, block) {
        hljs.lineNumbersBlock(block);
    });
    $(".owl-carousel").owlCarousel({
        items:5,
        lazyLoad:true,
        loop:true,
        margin:15,
        stagePadding:50,
        smartSpeed:450,
        autoplay:true,
        autoplayTimeout:2000,
        autoHeight:true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
</script>
</body>
</html>