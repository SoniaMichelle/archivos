@extends('layouts.app')
@section('css')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col tituloUser">
            <h1>Bienvenido</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="contenidos mt-5">
                <a href="{{ route('dash.show') }}">
                    <div class="card">
                        <img src="{{ asset('img/a3.jpg') }}" alt="">
                        <div class="info">
                            <h2>Mis archivos</h2>
                        </div>
                    </div>
                </a>
                <a href="{{ route('dash.crear') }}">
                    <div class="card">
                        <img src="{{ asset('img/us2.jpg') }}" alt="">
                        <div class="info">
                            <h2>Subir Archivo</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection