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
					<form role="form" action="{{url('/Materia')}}" method="POST" >
					{{csrf_field()}}
						<div class="card-body">
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" name="nombre" id="IDnombreMateria" class="form-control" placeholder="Ingrese Nombre">
							</div>
							<div class="form-group">
								<label>Docente</label>
								<input type="number" min="1" max="10" name="docente" id="IDdocente" class="form-control" placeholder="Ingrese Docente">
							</div>
							<div class="form-group">
								<label>Curricula</label>
								<input type="number" min="1" max="10" name="curricula" id="IDcurricula" class="form-control" placeholder="Ingrese Curricula">
							</div>
							<div class="form-group">
								<label>Curso</label>
								<input type="number" min="1" max="10" name="curso" id="IDnombreCurso" class="form-control" placeholder="Ingrese Curso">
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