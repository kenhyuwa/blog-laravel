<div class="wrapper_pagination">
  <div class="container">
    <nav>
      <span class="text">PREVIOUS - NEXT</span>
      <div class="left">
        <a href="{{ isset($prev) ? url($prev) : '' }}" class="prev" {{ isset($prev) ? '' : 'disabled' }}></a>
      </div>
      <div class="right">
        <a href="{{ isset($next) ? url($next) : '' }}" class="next" {{ isset($next) ? '' : 'disabled' }}></a>
      </div>
    </nav>
  </div>
</div>