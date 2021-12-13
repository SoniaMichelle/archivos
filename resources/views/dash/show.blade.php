@extends('layouts.app')
@section('css')
<link href="{{ asset('css/dash.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col ">
            <h1 class="titulo-lista">MIS ARCHIVOS</h1>
            <div class="row">
                <div class="col">
                    <form action="{{route('dash.show')}}" method="GET">
                        <div class="form-row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="texto">
                            </div>
                            <div class="col-auto">
                                <input type="submit" class="btn btn-primary" value="Buscar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card lista">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Archivo</th>
                                <th scope="col">Mostrar</th>
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
                                        <a target="_blank" class="btn btn-sm btn-outline-secondary" href="storage/{{Auth::id()}}/{{$file->url}}"><i class="fas fa-eye"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="but">
                                        <a class="btn btn-sm btn-outline-warning" href="storage/{{Auth::id()}}/{{$file->url}}" download="{{$file->url}}"><i class="fas fa-download"></i></a>
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
@section('pagina')
{{$files->links()}}
@endsection