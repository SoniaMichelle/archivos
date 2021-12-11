@extends('layouts.app')
@section('content')
<div class="row mt-5">
    <div class="col">
        <ul class="list-group">
            <li class="list-group-item active bg-info">Documentos</li>
            @foreach($files as $file)
            <li class="list-group-item">
                <a class="texto" href="/storage/{{$file->user_id}}/{{$file->url}}">{{$file->url}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection