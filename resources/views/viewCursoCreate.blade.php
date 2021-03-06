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
					<form role="form" action="{{url('/Curso')}}" method="POST" >
					{{csrf_field()}}
						<div class="card-body">
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" name="nombre" id="IDnombreCurso" class="form-control" placeholder="Ingrese Nombre">
							</div>
							<div class="form-group">
								<label>Aula</label>
								<input type="text" name="aula" id="IDaula" class="form-control" placeholder="Ingrese Aula">
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