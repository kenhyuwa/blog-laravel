<div class="wrapper __packages">
    <div class="container">
        <header class="__packages__header">
            <h2 class="__packages__title">Laravel Packages References</h2>
        </header>
        <div class="gutter-2">
            @isset ($packages)
                @if(sizeof($packages) > 0)
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
                @endif
            @else
                @if(sizeof($packages_share['packages']) > 0)
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
                @endif
            @endisset
        </div>
    </div>
</div>