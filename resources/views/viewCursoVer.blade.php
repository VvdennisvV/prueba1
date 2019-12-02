@extends('theme.lte.layout')
@section('contenido')
    <div class="card">
        <div class="card-header">
            <form class="form-inline" action="{{url('/rutaCursoBuscarVer')}}" method="GET">
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
                    @foreach ($cursos as $uncurso)
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
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal{{$uncurso->id}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </button>

                            <div class="modal fade" id=modal{{$uncurso->id}}>
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Vista Curso</h4>
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
                                                            <input type="text" class="form-control" placeholder={{$uncurso->nombre}} disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Aula</label>
                                                            <input type="number" class="form-control" placeholder={{$uncurso->aula}} disabled>
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
        {{ $cursos->links() }}
    </div>
    
@endsection 