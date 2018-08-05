<div class="wrapper __packages">
    <div class="container">
        <header class="__packages__header">
            <h2 class="__packages__title">Laravel Packages References</h2>
        </header>
        <div class="gutter-2">
            @isset ($packages)
                @foreach ($packages as $key => $v)
                    <a href="{{ url(str_replace('https://packagist.org', '', $v['url'])) }}" class="gutter-item">
                        <div class="__top">
                            <img src="{{ asset('/img/laravel-packages.png') }}" class="img-fluid">
                        </div>
                        <div class="__bottom">
                            <h1>{{ $v['name'] }}</h1>
                            <p>{{ ($v['description'] == '') ? '...' : $v['description'] }}</p>
                        </div>
                    </a>
                @endforeach
            @else
                @foreach ($packages_share['packages'] as $key => $v)
                    <a href="{{ url(str_replace('https://packagist.org', '', $v['url'])) }}" class="gutter-item">
                        <div class="__top">
                            <img src="{{ asset('/img/laravel-packages.png') }}" class="img-fluid">
                        </div>
                        <div class="__bottom">
                            <h1>{{ $v['name'] }}</h1>
                            <p>{{ ($v['description'] == '') ? '...' : $v['description'] }}</p>
                        </div>
                    </a>
                @endforeach
            @endisset
        </div>
    </div>
</div>