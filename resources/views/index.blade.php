@extends('layout')
@section('content')
<div class="jumbotron">
    <p class="h3 text-center py-4">Quiz - O que você sabe sobre as redes sociais</p>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6 text-center imagem">
        <a href="#" class="img-thumbnail logo">
            <img href="#" class="img-fluid" src="{{asset('storage/imagem/logo.jpg')}}" />
        </a>
    </div>
    <div class="col-md-6 col-sm-6 text-center py-4">
        <p class="texto">
            <h4>Este quiz é para saber o quanto você sabe sobre redes sociais <br>
                <strong>REDES SOCIAIS!!!</strong> </h4>
        </p>
        <div class="card-footer py-4 text-center">
            <a href="/iniciar" class="btn btn-primary" role="button">Começar</a>
        </div>
    </div>
</div>
@endsection