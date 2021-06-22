<div class="header-template">
  <header>
    <div class="header-80">
      <div class="header-left">
        <div class="logo">
          <img src="{{ asset('img/dc-logo.png') }}" alt="">
        </div>
      </div>
    <div class="header-right">
      <ul>
        @foreach ($links as $link )
          <li><a href="{{route($link)}}">{{strtoupper($link)}}</a></li>
        @endforeach
      </ul>
    </div>
    </div>
  </header>
  <div class="head-jumbotron"></div>
</div>