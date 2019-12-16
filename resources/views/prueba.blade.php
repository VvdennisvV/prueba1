@extends('theme.lte.layout')

@section('aside')
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Docente
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="/DocenteCreate" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Crear</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="/DocenteVer" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ver</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="/DocenteEditar" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editar</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="/DocenteEliminar" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Eliminar</p>
            </a>
            </li>
        </ul>
    </li>
@endsection

@section('contenido')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pagina Principal</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 10%">
                            #
                        </th>
                        <th style="width: 40%">
                            Tabla
                        </th>
                        <th style="width: 40%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <a>
                                Docente
                            </a>
                            <br/>
                            <small>
                                Created 01.01.2019
                            </small>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="/DocenteCreate">
                                <i class="fas fa-folder">
                                </i>
                                Create
                            </a>
                            <a class="btn btn-primary btn-sm" href="/DocenteVer">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/DocenteEditar">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/DocenteEliminar">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            <a>
                                Estudiante
                            </a>
                            <br/>
                            <small>
                                Created 01.01.2019
                            </small>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="/EstudianteCreate">
                                <i class="fas fa-folder">
                                </i>
                                Create
                            </a>
                            <a class="btn btn-primary btn-sm" href="/EstudianteVer">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/EstudianteEditar">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/EstudianteEliminar">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                            <a>
                                Materia
                            </a>
                            <br/>
                            <small>
                                Created 01.01.2019
                            </small>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="/MateriaCreate">
                                    <i class="fas fa-folder">
                                    </i>
                                    Create
                            </a>
                            <a class="btn btn-primary btn-sm" href="/MateriaVer">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/MateriaEditar">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/MateriaEliminar">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4
                        </td>
                        <td>
                            <a>
                                Curso
                            </a>
                            <br/>
                            <small>
                                Created 01.01.2019
                            </small>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="/CursoCreate">
                                        <i class="fas fa-folder">
                                        </i>
                                        Create
                            </a>
                            <a class="btn btn-primary btn-sm" href="/CursoVer">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/CursoEditar">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/CursoEliminar">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>                         
                </tbody>
            </table>
        </div>             
    </div>    
@endsection