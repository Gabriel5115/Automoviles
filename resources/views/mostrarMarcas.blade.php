@extends('templates/generico')

@section('title', 'modificar Coche')

@section('content')
<div class="row">
    @foreach($marcas as $marca)
    <div class="col">
        <a class="btn btn-outline-primary" href="{{route('coche.show',$marca->id)}}">
            {{$marca->marca}}
        </a>
    </div>
    @endforeach
</div>
@endsection