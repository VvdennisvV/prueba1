@extends('admin.vistaAdmin')

@section('contenido')
    <div class="card">
        <div class="card-header">
                <h3 class="card-title">Usuarios del Sistema</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 10%">
                            #
                        </th>
                        <th style="width: 20%">
                            Usuario
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $unUsuario)
                        <tr>
                            <td>
                                {{$unUsuario->id}}
                            </td>
                            <td>
                                {{$unUsuario->name}}
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td class="project-actions text-right">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ver{{$unUsuario->id}}">
                                    <i class="fas fa-eye">
                                    </i>
                                    Ver
                                </button>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editar{{$unUsuario->id}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminar{{$unUsuario->id}}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Eliminar
                                </button>

                                <div class="modal fade" id=ver{{$unUsuario->id}}>
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Usuario</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form">
                                                    <div class="row">                    
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Nombre</label>
                                                                <input type="text" class="form-control" disabled value="{{$unUsuario->name}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">                    
                                                        <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Apellido Paterno</label>
                                                                    <input type="text" class="form-control" disabled value="{{$unUsuario->apellPaterno}}">
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Apellido Materno</label>
                                                                    <input type="text" class="form-control" disabled value="{{$unUsuario->apellMaterno}}">
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">                    
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Carnet de Identidad</label>
                                                                <input type="number" class="form-control" disabled value="{{$unUsuario->ci}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Privilegio</label>
                                                                <input type="text" class="form-control" disabled value="{{$unUsuario->privilegio}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row"> 
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>E-mail</label>
                                                                <input type="text" class="form-control" disabled value="{{$unUsuario->email}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Observaciones</label>
                                                                <input type="text" class="form-control" disabled value="{{$unUsuario->observacion}}"">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>                                    
                                        </div>
                                    <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                 <!-- /.modal ver-->
                                <div class="modal fade" id=editar{{$unUsuario->id}}>
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="card card-primary">
                                                    <div class="card-header bg-info">
                                                        <h3 class="card-title">Editar Usuario</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <form class="form-group" action="/AdminUsuario/{{$unUsuario->id}}" method="POST" enctype="multipart/form-data">
                                                            @method('PUT')
                                                            {{csrf_field()}}
                                                            <div class="row">                    
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Nombre</label>
                                                                        <input type="text" name="nombre" value="{{$unUsuario->name}}" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">                    
                                                                <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Apellido Paterno</label>
                                                                            <input type="text" name="apellidoPaterno" value="{{$unUsuario->apellPaterno}}" class="form-control">
                                                                        </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Apellido Materno</label>
                                                                            <input type="text" name="apellidoMaterno" value="{{$unUsuario->apellMaterno}}" class="form-control">
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">                    
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Carnet de Identidad</label>
                                                                        <input type="number" name="carnetIdentidad" value="{{$unUsuario->ci}}" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Privilegio</label>
                                                                        <input type="text" name="privilegio" value="{{$unUsuario->privilegio}}" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row"> 
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>E-mail</label>
                                                                        <input type="text" name="email" value="{{$unUsuario->email}}" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Observaciones</label>
                                                                        <input type="text" name="observacion" value="{{$unUsuario->observacion}}" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-info">Guardar Cambios</button>
                                                            <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                                                        </form>                                                      
                                                    </div>
                                                </div>
                                                <!--fin card primary-->
                                            </div> 
                                        </div>
                                    <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                 <!-- /.modal editar-->
                                <div class="modal fade" id=eliminar{{$unUsuario->id}}>
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h4 class="modal-title">Advertencia</h4>              
                                            </div>
                                            <div class="modal-body">
                                                <p>Esta seguro de eliminar el registro?</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <form method="POST" action="/AdminUsuario/{{$unUsuario->id}}">
                                                    @method('DELETE')
                                                    {{ csrf_field() }}  <!--genera un token para enviar los datos al controlador-->
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                    <!-- /.modal eliminar-->                      
                            </td>
                        </tr>  
                    @endforeach                                        
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>                                       
@endsection