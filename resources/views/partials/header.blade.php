<header class="bg white">
  <div class="container fx jc-between ai-center">
    <a href="{{route('home')}}">
      <img id="logo-dc" src="/img/dc-logo.png" alt="Logo DC Home">
    </a>
    <nav>
      <ul>
        @foreach (config('links') as $link)
          <li>
            <a class="{{Route::currentRouteName() === $link['label'] ? 'active' : ''}}" href="{{ route($link['label']) }}">{{$link['text'] }}</a>
          </li>            
        @endforeach
      </ul>
    </nav>
  </div>
  <div class="jumbotron">
    <img src="/img/jumbotron.jpg" alt="Awesome comics!">
  </div>
</header>
