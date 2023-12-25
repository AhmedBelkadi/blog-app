<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">mon blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('about')}}">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('contact')}}">contact</a>
          </li>
            <li class="nav-item">
                @auth()
                    <a class="nav-link active" aria-current="page" href="{{route('mesArticles')}}">mes articles</a>
                @endauth
          </li>
{{--          <li class="nav-item">--}}
{{--            <a class="nav-link active" aria-current="page" href="{{route('showSubscribe')}}">subscribe</a>--}}
{{--          </li>--}}
            <li class="nav-item">

            @auth()
            <a href="{{route("logout")}}" class="btn btn-danger" >logout</a>
            @endauth
            @guest()
                <a href="{{route('showLogin')}}" class="btn btn-success" >login</a>
                <a href="{{route('showSubscribe')}}" class="btn btn-success" >register</a>
            @endguest
          </li>

        </ul>
      </div>
    </div>
  </nav>
