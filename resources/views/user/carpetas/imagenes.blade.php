@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-colums">
                @foreach($files as $file)
                <div class="card">
                    fkjvnkjs
                    <img class="card-img-top" src="{{asset($file->url)}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection