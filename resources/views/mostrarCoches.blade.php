@extends('templates/generico')

@section('title', 'Automoviles')

@section('content')
@if(session('eliminado'))
<div class="toast" style="opacity: 1">
    <div class="toast-header">
        <strong class="mr-auto">Notificacion</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        {{session('eliminado')}}
    </div>
</div>


@endif
@if(session('crearCoche'))
<div class="toast" style="opacity: 1">
    <div class="toast-header">
        <strong class="mr-auto">Notificacion</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        {{session('crearCoche')}}
    </div>
</div>


@endif
<h2 class="col-12 text-center text-white bg-dark mt-2">MODELOS DISPONIBLES</h2>
<div class="container-fluid row row-cols-4 g-2">
    @foreach($coches as $coche)
    <div class="col-sm-4 mt-2">

        <div class="card"> <img src="storage/img/{{$coche->imagen}}" class="card-img-top" width="100%">
            <div class="card-body pt-0 px-0">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-column p-3">
                        <span class="text-muted">{{$coche->marca}}</span>
                        <small class="text-muted">{{$coche->modelo}}</small>
                    </div>

                </div>
                <div class="d-flex flex-row justify-content-between mb-0 px-3"> <small class="text-muted mt-1">PRECIO DESDE</small>
                    <h6>{{$coche->precio}}&euro;</h6>
                </div>
                <hr class="mt-2 mx-3">
                <div class="d-flex flex-row justify-content-between px-3 pb-4">
                    <div class="d-flex flex-column"><span class="text-muted">Consumo</span><small class="text-muted">L/100KM</small></div>
                    <div class="d-flex flex-column">
                        <h5 class="mb-0">{{$coche->consumo}}</h5><small class="text-muted text-right">(ciudad/Mxt)</small>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between p-3 mid">
                    <div class="d-flex flex-column"><small class="text-muted mb-1">MOTOR</small>
                        <div class="d-flex flex-row"><img src="https://imgur.com/iPtsG7I.png" width="35px" height="25px">
                            <div class="d-flex flex-column ml-1"><small class="ghj">{{$coche->motor}}L </small></div>
                        </div>
                    </div>
                    <div class="d-flex flex-column"><small class="text-muted mb-2">POTENCIA</small>
                        <div class="d-flex flex-row"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                            </svg>
                            <h6 class="ml-1">{{$coche->cv}} cv</h6>
                        </div>
                    </div>
                </div> 
                <div class="mx-3 mt-1 mb-1 d-flex justify-content-center">

                    <a href="{{route('coche.edit',$coche->id_coche)}}"  class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                        Modificar
                    </a>
                    <!-- Button trigger modal -->
                    <button type="button" class="mx-2 btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                         Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Vehículo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ¿Estás seguro que quieres eliminar este coche?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <form action="{{route('coche.destroy',$coche->id_coche)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="mx-2 btn btn-outline-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                                Eliminar
                                            </button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    @endforeach


</div>
@endsection