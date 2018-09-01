@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estas en Casa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    


<div class="card mb-3">
  <img class="card-img-top" src="{{ asset('img//fondo.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Bienvenido! {{ Auth::user()->name }}</h5>
    <p class="card-text">Este es tu espacio donde puedes aprender y compartir con el Universo, podras difrutar de árticulos creados por Lotario, nuestro guía, tambien encontraras distintas prácticas y podras comentar tu experiencia, preparate para este nuevo viaje.</p>
    
  </div>
</div>



                </div>

            </div>
        </div>
    </div>
</div>
@endsection
