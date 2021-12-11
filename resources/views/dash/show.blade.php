@extends('layouts.app')
@section('css')
<link href="{{ asset('css/dash.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col ">
            <h1 class="titulo-lista">MIS ARCHIVOS</h1>
            <div class="card lista">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Archivo</th>
                                <th scope="col">Mostrar</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Descargar</th>
                                <th scope="col">Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $file)
                            <tr>
                                <th scope="row">{{$file->id}}</th>
                                <td>{{$file->url}}</td>
                                <td>
                                    <div class="but">
                                        <a target="_blank" class="btn btn-sm btn-outline-secondary" href="{{route('user.imagenes',$file->id)}}"><i class="fas fa-eye"></i>VER</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="but">
                                        <a class="btn btn-sm btn-outline-info" href="{{route('dash.edit', $file->id)}}"><i class="fas fa-marker"></i>ACTUALIZAR</a>

                                    </div>
                                </td>
                                <td>
                                    <div class="but">
                                        <a class="btn btn-sm btn-outline-warning" href="{{url('/download',$file->url)}}"><i class="fas fa-download"></i>Descargar</a>
                                    </div>
                                </td>
                                <td>
                                    <form action="{{route('dash.destroy', $file->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="but">
                                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection