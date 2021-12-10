@extends('layouts.app')
@section('css')
<link href="{{ asset('css/dash.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col tituloCrear">
            <h1>Subir archivo</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card tarjeta" style="width: 40rem;">
                <div class="card-body">
                    <form action="{{route('dash.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3">
                            <select id="inputState" class="form-control categoria">
                                <option selected>Selecciona una carpeta</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <input type="file" class="upload-box" name="file[]" multiple class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn">Subir archivo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
@endsection