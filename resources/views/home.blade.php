@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">AbastCam</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <div class="alert alert-primary" role="alert">
                        <center><h1>Felicidades !!! </h1></center>
                        <center>ya ingresaste a AbastCam ahora puedes Buscar y publicar productos</center>
                        <br>
                        <center> <h4>Que quieres hacer ?</h4></center>
                        <br><br>
                        <center>
                        <a href="{{ route('ejemplo2') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Buscar</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{route('mimenu')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Publicar</a>
                        </center>
                      </div>
                    


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
