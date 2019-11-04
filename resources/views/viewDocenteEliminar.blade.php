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
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{$docente->id}}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </button>    
                        <div class="modal fade" id=modal{{$docente->id}}>
                            <div class="modal-dialog">
                                <div class="modal-content bg-danger">
                                <div class="modal-header">
                                    <h4 class="modal-title">Advertencia</h4>              
                                </div>
                                <div class="modal-body">
                                    <p>Esta seguro de eliminar el registro?&hellip;</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
                                    <form method="POST" action="/Docente/{{$docente->id}}">
                                        @method('DELETE')
                                        {{ csrf_field() }}  <!--genera un token para enviar los datos al controlador-->
                                        <button type="submit" class="btn btn-danger btn-sm"><i for="btn" class="fa fa-trash"></i> Borrar</button>
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
@endsection