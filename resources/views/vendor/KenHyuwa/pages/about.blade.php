<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>{{ 'About' }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="G4-5AgV-JljiutZ22RgZOJ77oInomQ2w3kvzHvWw3RQ" />
    <meta name="referrer" content="always">
    <meta name="robots" content="all,index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Litepie & Team">
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

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

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
        'CURRENT_PATH' => URL(Route::current()->uri())
      ]);
    </script>
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '210320139437352',
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
<section id="particles">
    <div class="title">
        <h3>https://litepie.com - 2017</h3>
        <h1>LITEPIE TUTORIAL</h1>
        <h3>Laravel Indonesia</h3>
    </div>
    <div class="more-pens" id="app">
        <a href="{{ URL('/') }}" class="white-mode">BACK TO HOME</a>
    </div>
</section>

<!-- JavaScript -->
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>