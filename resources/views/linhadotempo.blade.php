<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="sr6THrzz8ho4btUW7dneAToSyawrMQueofzBRpWO">

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