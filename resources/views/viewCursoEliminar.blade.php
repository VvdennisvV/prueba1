@extends('theme.lte.layout')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <form class="form-inline" action="{{url('/rutaCursoBuscarEliminar')}}" method="GET">
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
                            Cursos
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cursos as $uncurso)
                    <tr>
                        <td>
                            {{$uncurso->id}}
                        </td>
                        <td>
                            <a>
                                {{$uncurso->nombre}}
                            </a>
                            <br/>
                            <small>
                                Created 01.01.2019
                            </small>
                        </td>
                        <td class="project-actions text-right">
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{$uncurso->id}}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>    
                            <div class="modal fade" id=modal{{$uncurso->id}}>
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
                                        <form method="POST" action="/Curso/{{$uncurso->id}}">
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
    <div class="pagination justify-content-center">
            {{ $cursos->links() }}
    </div>

@endsection