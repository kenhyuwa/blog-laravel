<div class="wrapper __open_source">
    <div class="container">
        <header class="__open_source__header">
            <h2 class="__open_source__title">Open Source Project References</h2>
        </header>
        <div class="gutter-3">
            @isset ($github)
                @foreach ($github['github'] as $key => $v)
                    <div class="gutter-item-3-{{ $key+1 }}">
                        <div class="__top">
                            <a href="{{ $v['html_url'] }}" target="_blank">
                                <img src="/img/post-2.png" class="img-fluid">
                            </a>
                        </div>
                        <div class="__bottom">
                            <h1>{{ ucwords(str_slug($v['name'], ' ')) }}</h1>
                            <p>{{ ($v['description'] == '') ? '...' : str_limit($v['description'], $limit = 100, $end = '...') }}</p>
                            <p>{!! ($v['homepage'] == '') ? '' : '<a href="' . $v['homepage'] . '" target="_blank"><small>' . $v['homepage'] . '</small></a>' !!}</p>
                        </div>
                    </div>
                @endforeach
            @else 
                @foreach ($github_share['github'] as $key => $v)
                    <div class="gutter-item-3-{{ $key+1 }}">
                        <div class="__top">
                            <a href="{{ $v['html_url'] }}" target="_blank">
                                <img src="/img/post-2.png" class="img-fluid">
                            </a>
                        </div>
                        <div class="__bottom">
                            <h1>{{ ucwords(str_slug($v['name'], ' ')) }}</h1>
                            <p>{{ ($v['description'] == '') ? '...' : str_limit($v['description'], $limit = 100, $end = '...') }}</p>
                            <p>{!! ($v['homepage'] == '') ? '' : '<a href="' . $v['homepage'] . '" target="_blank"><small>' . $v['homepage'] . '</small></a>' !!}</p>
                        </div>
                    </div>
                @endforeach 
            @endisset
        </div>
    </div>
</div>