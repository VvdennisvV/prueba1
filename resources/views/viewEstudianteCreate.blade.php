@extends('theme.lte.layout')
@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-8">
				<!-- general form elements -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Nuevo Registro</h3>
					</div>
				<!-- /.card-header -->
				<!-- form start -->
					<form role="form" action="{{url('/Estudiante')}}" method="POST" >
					{{csrf_field()}}
						<div class="card-body">
							<div class="form-group">
								<label>Nombres</label>
								<input type="text" name="nombre" id="IDnombreEstudiante" class="form-control" placeholder="Ingrese Nombres">
							</div>
							<div class="form-group">
								<label>Apellidos</label>
								<input type="text" name="apellido" id="IDapellidoEstudiante" class="form-control" placeholder="Ingrese Apellidos">
							</div>
							<div class="form-group">
								<label>Curso</label>
								<input type="number" min="1" max="10" name="curso" id="IDcursoEstudiante" class="form-control" placeholder="Ingrese Curso">
							</div>
							<div class="form-group">
								<label>Carrera</label>
								<input type="text" name="carrera" id="IDcarreraEstudiante" class="form-control" placeholder="Ingrese Carrera">
							</div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Registrar Nuevo</button>
						</div>
					</form>
				</div>
				<!-- /.card -->				
			</div>
			<!--/.col (left) -->		
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid --> 
@endsection    