@extends('theme.lte.layout')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Docentes</h3>
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
                    @foreach ($docentes as $undocente)
                    <tr>
                        <td>
                            {{$undocente->id}}
                        </td>
                        <td>
                            <a>
                                {{$undocente->nombre}}
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
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal{{$undocente->id}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </button>

                            <div class="modal fade" id=modal{{$undocente->id}}>
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Vista Docente</h4>
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
                                                            <input type="text" class="form-control" placeholder={{$undocente->nombre}} disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Apellido</label>
                                                            <input type="text" class="form-control" placeholder={{$undocente->apellido}} disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">                    
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label float: left>Profesion</label>
                                                            <input type="text" class="form-control" placeholder={{$undocente->profesion}} disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label float: left>Direccion</label>
                                                            <input type="text" class="form-control" placeholder={{$undocente->direccion}} disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row"> 
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label float: left>Celular</label>
                                                            <input type="text" class="form-control" placeholder={{$undocente->celular}} disabled>
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
                            <!-- /.modal -->
                        </td>
                    </tr>  
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