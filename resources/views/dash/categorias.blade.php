@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Categoria
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content bg-defaul">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Crear categoria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('dash.categoria.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <label for="categoria">Nueva categoria</label>
                                <input type="text" class="form-control" id="categoria" name="categoria" aria-describedby="emailHelp" placeholder="Ingrese el nombre de la categori">
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection