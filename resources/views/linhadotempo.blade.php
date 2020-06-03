<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>aniversario</title>

    <!-- Scripts -->
    <script src="http://localhost/aniversario2/js/app.js" defer></script>
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <script src="{{ asset('/vertical-timeline-master/assets/js/main.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/vertical-timeline-master/assets/css/style.css') }}">
    <link rel="shortcut icon" type="image/ico" href="{{ asset('storage/img/polaroid-pictures-svgrepo-com.ico') }}"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost/aniversario2/css/app.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li>
                            <button class="btn btn-default" onclick="history.back();">Voltar</button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('cartao/cartao') }}">Cartões</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
<header class="cd-main-header text-center flex flex-column flex-center">
    <h1>Memórias</h1>
    <h3>Temos muita história pra contar</h3>
</header>
<section class="cd-timeline js-cd-timeline">
    <div class="container max-width-lg cd-timeline__container">
        @foreach ($cartoes as $cartao)
        <div class="cd-timeline__block">
                @if($cartao['icone'] == 0)
                    <div class="cd-timeline__img cd-timeline__img--picture">
                        <img src="{{ asset('vertical-timeline-master/assets/img/cd-icon-location.svg') }}" alt="Location">
                    </div> <!-- cd-timeline__img -->
                @elseif($cartao['icone'] == 1)
                    <div class="cd-timeline__img cd-timeline__img--picture">
                        <img src="{{ asset('vertical-timeline-master/assets/img/cd-icon-picture.svg') }}" alt="Picture">
                    </div> <!-- cd-timeline__img -->
                @else
                    <div class="cd-timeline__img cd-timeline__img--picture">
                        <img src="{{ asset('vertical-timeline-master/assets/img/cd-icon-movie.svg') }}" alt="Movie">
                    </div> <!-- cd-timeline__img -->
                @endif

                <div class="cd-timeline__content text-component">
                    <h2>{{ $cartao['titulo'] }}</h2>
                    <p class="color-contrast-medium">{{$cartao['texto']}}</p>
                    @if ($cartao['caminhoImagem'] != "")
                      <img src='{{ asset('storage/'.$cartao['caminhoImagem']) }}' alt=''>
                    @endif

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">{!! date_format(new \DateTime($cartao['data']), "d/m/Y") !!}</span>
                    </div>
                </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->
        @endforeach
    </div>
</section>

</body>
</html>