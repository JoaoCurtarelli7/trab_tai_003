<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Relação de Placas</title>




    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><b><i>
                Relação de Placas e Automoveis</i></b>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            @guest

            @else
                <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                          <li class="navbar-item active">
                            <a class="nav-link " href="{{ url('/fabrica') }}" style="margin-left: 30px">Fabricas</a>
                        </li>

                        <li class="navbar-item active">
                            <a class="nav-link " href="{{ url('/placa') }}" style="margin-left: 30px">Placas</a>
                        </li>

                        <li class="navbar-item active">
                            <a class="nav-link " href="{{ url('/carro') }}" style="margin-left: 30px">Carros</a>
                        </li>



                    </ul>
                @if (Route::has('register'))
                @endif
            @endguest

            <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Logar') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
                            </li>
                        @endif
                    @else
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-dark "
                                    aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>


                            </div>
                        </div>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <p></p>
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" >

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @include('layouts.flash-message')
                        @yield('cabecalho')
                        @yield('form')
                        @yield('content')
                        @yield('listagem')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
integrity="sha256-yE5LLp5HSQ/z+hJeCqkz9hdjNkk1jaiGG0tDCraumnA=" crossorigin="anonymous"></script>
<!-- Carrega Script Persolalizados na Página -->
@yield("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script>
(function($){
    $(document).ready(function (){
            $('.dropdown-toggle').dropdown();
    });
})(jQuery);
</script>
</body>

</html>
