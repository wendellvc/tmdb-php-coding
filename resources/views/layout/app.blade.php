<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Movies - TMDB') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="navbar-wrapper">
                  <a class="navbar-brand" href="{{ url('/') }}">
                      {{ config('app.name', 'Movies - TMDB') }}
                  </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">{{ __('Welcome!') }}</li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
          
          <!-- display breadcrumps except home/landing page -->
          @if(request()->route()->getName() != 'home')
          <div class="breadcrumps mb-4">
            <div class="container">
              <a href="/">Home</a> &gt;
              <?php $link = ""; ?>
              @for($i = 1; $i <= count(Request::segments()); $i++)
                @if($i < count(Request::segments()) & $i > 0)
                <?php $link .= "/" . Request::segment($i); ?>
                <a href="<?php echo $link; ?>">{{ ucwords(str_replace('-', ' ', Request::segment($i)))}}</a> >
                @else
                  @if(request()->route()->getName() == 'movies')
                    {{ ucwords(str_replace('-', ' ', Request::segment($i)))}}
                  @else
                    {{$movie->getTitle()}}
                  @endif
                @endif
              @endfor
            </div>
          </div>
          @endif

          <!-- view content-->
          @yield('content')

        </main>
    </div>
</body>
</html>
