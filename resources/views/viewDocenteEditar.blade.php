@extends('theme.lte.layout')
@section('contenido') 
    <div class="card">
        <div class="card-header">
            <form class="form-inline" action="{{url('/rutaBuscarEditar')}}" method="GET">
                {{csrf_field()}}
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" name="name" type="search" placeholder="Buscar" aria-label="Search">
                    <div class="input-group-append">
                    <button class="btn btn-default" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 10%">
                            #
                        </th>
                        <th style="width: 20%">
                            Docentes
                        </th>
                        <th style="width: 20%">
                            Imagen
                        </th>
                        
                        <th style="width: 20%" class="text-center">
                            Asignatura
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($docentes as $docente)
                <tr>
                    <td>
                        {{$docente->id}}
                    </td>
                    <td>
                        <a>
                        {{$docente->nombre}}
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{asset('asset/adminLTE/dist/img/avatar.png')}}">
                            </li>
                        </ul>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Hardware</span>
                    </td>
                    <td class="project-actions text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$docente->id}}">
                            Edit
                        </button>
                    </td>
                </tr> 

                <div class="modal fade" id=modal{{$docente->id}}>
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Editar Docente</h4>                                            
                            </div>
                            <div class="modal-body">
                                    <div class="col-sm-6">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Editar</h3>
                                            </div>
                                            <div class="card-body">
                                                    <form class="form-group" action="/Docente/{{$docente->id}}" method="POST" enctype="multipart/form-data">
                                                    @method('PUT')
                                                        {{csrf_field()}}
                                                        <div class="row">                    
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Nombre</label>
                                                                    <input type="text" name="nombre" value = "{{$docente->nombre}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Apellido</label>
                                                                    <input type="text" name="apellido" value="{{$docente->apellido}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">                    
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label float: left>Profesion</label>
                                                                    <input type="text" name="profesion" value="{{$docente->profesion}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label float: left>Direccion</label>
                                                                    <input type="text" name="direccion" value="{{$docente->direccion}}" class="form-control" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row"> 
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label float: left>Celular</label>
                                                                    <input type="text" name="celular" value="{{$docente->celular}}"class="form-control" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </form>                                                      
                                                
                                            </div>
                                        </div>
                                        <!--fin card primary-->
                                    </div>
                            
                            </div> 

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                            </div>

                        </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                @endforeach 

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>  
    <div class="pagination justify-content-center">
            {{ $docentes->links() }}
    </div>
    
@endsection