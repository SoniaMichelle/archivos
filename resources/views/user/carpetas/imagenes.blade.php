@extends('layouts.app')
@section('content')
@section('css')
<link href="{{ asset('css/galeria.css') }}" rel="stylesheet">
@endsection
<section id="galeria" class="container">
    <div class="text cente pt-5">
        <h1>Tu galeria</h1>
    </div>
    <div class="row">
        @foreach($files as $file)
        <div class="col-lg-4">
            <a target="_blank" class="btn" href="storage/{{Auth::id()}}/{{$file->url}}">
                <img src="/storage/{{$file->user_id}}/{{$file->url}}" alt="Galeria Imagenes">
            </a>
        </div>
        @endforeach
    </div>

</section>
@endsection

