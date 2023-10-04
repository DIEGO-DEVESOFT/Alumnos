<!-- Page header -->
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ALUMNOS
		<hr>
        <a href="?c=Alumnos&a=index" class="btn btn-secondary">Atrás</a>
	</h3>
</div>
<!-- Content -->
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>Ciclo Escolar</th>
					<th>Fecha</th>
					<th>Nombre Completo</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Genero</th>
					<th>Fecha Nacimiento</th>
					<th>Curp</th>
                    <th>Tipo de Sangre</th>
                    <th>Discapacidad</th>
                    <th>Municipio</th>
                    <th>Colonia</th>
                    <th>Telefono</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($alumnos as $alumno): ?>
					<tr class="text-center">
						<td>
							<?php echo $alumno->getCiclo_escolar(); ?>
						</td>
						<td>
							<?php echo $alumno->getFecha(); ?>
						</td>
						<td>
							<?php echo $alumno->getNombre_completo(); ?>
						</td>
						<td>
							<?php echo $alumno->getApellido_paterno(); ?>
						</td>
						<td>
							<?php echo $alumno->getApellido_materno(); ?>
						</td>
						<td>
							<?php echo $alumno->getGenero(); ?>
						</td>
                        <td>
							<?php echo $alumno->getFecha_Nacimiento(); ?>
						</td>
                        <td>
							<?php echo $alumno->getCurp(); ?>
						</td>
                        <td>
							<?php echo $alumno->getTipo_sangre(); ?>
						</td>
                        <td>
							<?php echo $alumno->getDiscapacidad(); ?>
						</td>
                        <td>
							<?php echo $alumno->getMunicipio(); ?>
						</td>
                        <td>
							<?php echo $alumno->getColonia(); ?>
						</td>
                        <td>
							<?php echo $alumno->getTelefono(); ?>
						</td>
                        <td>
							<a href="?c=Alumnos&a=actualizarAlumnos&Ciclo_escolar=<?php echo $alumno->getCiclo_escolar() ?>"
								class="btn btn-primary">
								<i class="bi bi-arrow-counterclockwise"></i>
							</a>
						</td>
						<td>
							<a href="?c=Alumnos&a=eliminarAlumnos&Ciclo_escolar=<?php echo $alumno->getCiclo_escolar() ?>"
								class="btn btn-danger">
								<i class="bi bi-file-x"></i>
							</a>
						</td>
						
					</tr>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</section>