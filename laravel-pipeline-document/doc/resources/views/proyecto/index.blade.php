@extends('layouts.app')
@section('content')
<div class="row pt-3">
   <div class="col-lg-12">
 
      <div class="card-list">
         <div class="card-list-head">
            <h6>Archivos</h6>
            <div class="dropdown">
               <button class="btn-options" type="button" id="cardlist-dropdown-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="material-icons">more_vert</i>
               </button>
               <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(24px, 24px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Nuevo archivo</a>
                  <a class="dropdown-item text-danger" href="#">Archive</a>
               </div>
            </div>
         </div>
         <input class="search" placeholder="Search" />
         @foreach ($proyectos as $proyecto)
            <div class="card card-task list">
                <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="card-body">
                <div class="card-title">
                    <a href="#">
                        <h6 data-filter-by="text">{{ $proyecto->nombre }}</h6>
                    </a>
                    <span class="text-small">{{ $proyecto->descripcion }}</span><br>
                    <span class="text-small">{{ $proyecto->fechaSistema }} (5 days)</span><br>
                    <span class="text-small">{{ $proyecto->fechaInicio }} | {{ $proyecto->fechaVencimiento }} | {{ $proyecto->tag_translated }}</span>
                </div>
                <div class="card-meta">
                    <ul class="avatars">
                        <li>
                            <a href="#" data-toggle="tooltip" title="David">
                            <img alt="David Whittaker" class="avatar" src="assets/img/avatar-male-4.jpg">
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <span><span class="badge badge-secondary">14</span></span>
                    </div>
                    <div class="dropdown card-options">
                        <button class="btn-options" type="button" id="task-dropdown-button-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Editar archivo</a>
                            <a class="dropdown-item" href="#">Agregar documento</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Archivar</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
         @endforeach
      </div>
   </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('proyecto.store') }}" method="post">
    {!! csrf_field() !!}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="material-icons">close</i>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group row">
                <label for="nombre" class="col-sm-4 col-form-label">Proyecto</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Breve nombre del grupo de documentos" require>
                </div>
            </div>
            <div class="form-group row">
                <label for="descripcion" class="col-sm-4 col-form-label">Descripción</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Breve descripción del proyecto" require>
                </div>
            </div>
            <div class="form-group row">
                <label for="fechaInicio" class="col-sm-4 col-form-label">Descripción</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" require>
                </div>
            </div>  
            <div class="form-group row">
                <label for="fechaVencimiento" class="col-sm-4 col-form-label">Descripción</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="fechaVencimiento" name="fechaVencimiento" require>
                </div>
            </div>                       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Crear nuevo proyecto</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
var options = {
  valueNames: [ 'name', 'born' ]
};

var userList = new List('users', options);
</script>
@endsection