@extends('layouts.app')

@section('content')

    <h3 class="display-5"><b><i>{{ __('Seja Bem-Vindo ')  }}</i></b></h3><br>
    <div class="row" >
        <div class="card mb-3" style="max-width: 540px; margin-right: 20px; border-color: rgb(0, 0, 0)">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/carro.png') }}" style="width: 200px;  margin-top:25px; margin-left: -20px;
                    margin-right: -25px;" class="card-img-top" >

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><b>Carros</b></h5>
                        <p class="card-text">Cadastre e Gerencie todos os carros</p>
                        <a href="{{url('carro')}}" class="btn btn-outline-danger">Ver</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px; border-color: rgb(0, 0, 0) ">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/placa.jpg') }}" class="card-img-top" style="width: 160px; padding: 10px; margin-top:25px;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><b>Placas</b></h5>
                        <p class="card-text">Cadastre e Gerencie todos os Placas</p>
                        <a href="{{url('placa')}}" class="btn btn-outline-danger">Ver</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 540px; border-color: rgb(0, 0, 0) ">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/factory.png') }}" class="card-img-top" style="width: 130px; padding: 10px;  margin-left: 10px; margin-top:10px;"
                         alt="calendar">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><b>Fabricas</b></h5>
                        <p class="card-text">Cadastre e Gerencie todas as Fabricas</p>
                        <a href="{{url('fabrica')}}" class="btn btn-outline-danger">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
