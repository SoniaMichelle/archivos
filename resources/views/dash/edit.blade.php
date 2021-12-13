@extends('layouts.app')
@section('css')
<!-- <link href="{{ asset('css/dash.css') }}" rel="stylesheet"> -->
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-center">Actualizar datos</h1>
        <div class="col mt-4">
            <form action="{{route('dash.update', $file)}}" method="post">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group">
                        <label for="nombre_archivo">Nombre del archivo</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Apellido Paterno" value="{{$file->url}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection