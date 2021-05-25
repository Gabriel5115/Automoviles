@extends('templates/generico')

@section('title', 'crear Coche')

@section('content')

<h2 class="col-12 text-center text-white bg-dark mt-2">AÑADIR COCHE</h2>
<div class="row">
    <form class="d-flex justify-content-center" role="form" method="post" 
          enctype="multipart/form-data" action="{{ route('coche.store') }}">
        {{ csrf_field() }}
        <div id="registroCoche" class="col-10  border rounded-3 p-4 shadow">
            <div class="mb-3">
                <label class="form-label" for="marca">Marca del Coche:</label>
                <select id="marca" name="marca" class="form-control" value="" autofocus>
                    @foreach($marcasCoches as $marca)
                    <option value='{{ $marca->id }}'>{{ $marca->marca }}</option>
                    @endforeach
                </select>
                @if ($errors->has('marca'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('marca') }}</strong>
                </span>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label" for="modelo">Modelo del Coche:</label>
                <input id="modelo" name="modelo" type="text" class="form-control" value="" autofocus>
                @if ($errors->has('modelo'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('modelo') }}</strong>
                </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" for="modelo">Precio del Coche:</label>
                <input id="modelo" name="modelo" type="text" class="form-control" value="" autofocus>
                @if ($errors->has('modelo'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('modelo') }}</strong>
                </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" for="modelo">Consumo del Coche:</label>
                <input id="modelo" name="modelo" type="text" class="form-control" value="" autofocus>
                @if ($errors->has('modelo'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('modelo') }}</strong>
                </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" for="modelo">Motor del Coche:</label>
                <input id="modelo" name="modelo" type="text" class="form-control" value="" autofocus>
                @if ($errors->has('modelo'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('modelo') }}</strong>
                </span>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" for="modelo">CV del Coche:</label>
                <input id="modelo" name="modelo" type="text" class="form-control" value="" autofocus>
                @if ($errors->has('modelo'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('modelo') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group">
                <label for="imagen">Imagen del Coche:</label>
                <input id="imagen" name="imagen" type="file" class="form-control-file" value="">
                @if ($errors->has('imagen'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('imagen') }}</strong>
                </span>
                @endif
            </div>
            <br/>  
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">INSERTAR</button>
                </div>
            </div>
        </div>

    </form>

</div>
@endsection