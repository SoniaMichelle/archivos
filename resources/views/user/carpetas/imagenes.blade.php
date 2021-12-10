@extends('layouts.app')
@section('content')
@section('css')
<link href="{{ asset('css/galeria.css') }}" rel="stylesheet">
@endsection


<div class="card-colums">
    @foreach($files as $file)
   
    <div class="card">
        <img class="card-img-top" src="/storage/{{$file->user_id}}/{{$file->url}}" alt="">
    </div>
    @endforeach
</div>
<!-- <div class="galeria mt-5">
    <div class="row">
        <div class="col">
            <div class="contenidos mt-5">
                <div class="card item">
                    <img src="{{ asset('img/a1.jpg') }}" alt="">
                    <div class="info">
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->




@endsection