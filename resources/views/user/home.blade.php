@extends('layouts.app')
@section('css')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col tituloUser">
            <h1>Bienvenid</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="contenidos mt-5">
                <a href="">
                    <div class="card">
                        <img src="{{ asset('img/a1.jpg') }}" alt="">
                        <div class="info">
                            <h2>Documentos</h2>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card">
                        <img src="{{ asset('img/a1.jpg') }}" alt="">
                        <div class="info">
                            <h2>Imagenes</h2>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="card">
                        <img src="{{ asset('img/a1.jpg') }}" alt="">
                        <div class="info">
                            <h2>Videos</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection