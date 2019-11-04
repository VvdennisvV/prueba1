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
					<form role="form" action="{{url('/Docente')}}" method="POST" >
					{{csrf_field()}}
						<div class="card-body">
							<div class="form-group">
								<label>Nombres</label>
								<input type="text" name="nombre" id="IDnombre" class="form-control" placeholder="Ingrese Nombres">
							</div>
							<div class="form-group">
								<label>Apellidos</label>
								<input type="text" name="apellido" id="IDapellido" class="form-control" placeholder="Ingrese Apellidos">
							</div>
							<div class="form-group">
								<label>Profesión</label>
								<input type="text" name="profesion" id="IDprofesion" class="form-control" placeholder="Ingrese Profesión">
							</div>
							<div class="form-group">
								<label>Direccion</label>
								<input type="text" name="direccion" id="IDdireccion" class="form-control" placeholder="Ingrese Direccion">
							</div>
							<div class="form-group">
								<label>Celular:</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-phone"></i></span>
									</div>
									<input type="text" name="celular" id="IDcelular" class="form-control" data-inputmask="'mask': '(999) 999-9999'" data-mask>
								</div>
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