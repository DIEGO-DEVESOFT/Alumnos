<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Cédula</title>
  <link rel="stylesheet" href="assets/styles/style.css">
  <link rel="stylesheet" href="assets/styles/styles.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;500&display=swap" rel="stylesheet">
</head>
<p class="texto">
<center>
 <body>
<!-- formulario -->
<form action="" method="post" enctype="text/plane">

<table border="0" align="center" width="1490" height="160">
        <tr>
                  <td width="20%" height="30%" align="center">
                          <img src="assets/img/logo.png" width="50%">
                  </td>
                  <td>
                                <table border="0" width="100%">
                                        <td>
                                                <h2>CÉDULA DE REGISTRO Y ACTUALIZACIÓN DE DATOS</h2>
                                        </td>
                                </table>
                                <table border="0" width="90%" align="center">
                                        <td width="50%">
                                                <label for="ciclo">CICLO ESCOLAR:</label>
                                                <input type="text" id="ciclo" name="Ciclo_escolar" value="<?php echo $alumno->getCiclo_escolar() ?>" required>
                                        </td>
                                        <td>
                                                <label for="fecha">FECHA:</label>
                                                <input type="date" id="fecha" name="fecha" value="<?php echo $alumno->getfecha() ?>" required>
                                        </td>
                                </table>
                </td>
                
          </tr>
</table>
<table border="5" cellspacing="1" cellpadding="15">
        <td>
                <table border="0" align="center" width="1450"bgcolor="white">
                        <td width="50%">
                                <p class="s">DATOS GENERALES DEL ALUMNO(A) </p>
                        </td>
        </td>
</table>
<table border="0" width="100%" align="center">
                <td>
                      <label for="nombre">Nombre(s):</label>
                      <input type="text" id="nombre" name="nombre" value="<?php echo $alumno->getNombre_Completo() ?>" required>
                </td>
                <td width="33%">
                        <label for="apellido">Apellido Paterno:</label>
                        <input type="text" id="apellido" name="apellido" value="<?php echo $alumno->getApellido_paterno() ?>" required>
                </td>
                <td>
                         <label for="apellidos">Apellido Materno:</label>
                         <input type="text" id="apellidos" name="apellidos" value="<?php echo $alumno->getApellido_materno() ?>" required>

                </td>
                
</table>
<table border="0" width="100%">
        <td width="50%">
                <label for="genero">Género:</label>
                <select id="genero" name="genero" required >
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
        </td>
        <td>
              <label for="fechas">Fecha de Nacimiento</label>
              <input type="date" id="fechas" name="fechas" value="<?php echo $alumno->getFecha() ?>" required>
        </td>
</table>
<table border="0" width="100%">
        <td>
              <label for="curp">CURP:</label>
              <input type="text" id="curp" name="curp" maxlength="18" style="text-transform: uppercase;" value="<?php echo $alumno->getCurp() ?>" required>
        </td>
        
</table>
<table border="0" width="100%">
        <td width="50%">
             <label for="sangre">Tipo de Sangre:</label>
             <input type="text" id="sangre" name="sangre" value="<?php echo $alumno->getTipo_sangre() ?>" required>
        </td>
        <td>
                <label for="discapacidad">Discapacidad / Amplitud Diferenciada:</label>
                <input type="text" id="discapacidad" name="discapacidad" value="<?php echo $alumno->getDiscapacidad() ?>" required>
        </td>
</table>
<table width="100%">
        
</table>
<table>

        <td>
                <br><b>DOMICILIO<hr></b>
                
        </td>
</table>
<table width="100%" border="0">
        <td>
                <label for="municipio">Municipio:</label>
                <input type="text" id="municipio" name="municipio" value="<?php echo $alumno->getMunicipio() ?>" required>
        </td>
        <td>
                <label for="colonia">Localidad/Colonia:</label>
                <input type="text" id="colonia" name="colonia" value="<?php echo $alumno->getColonia() ?>" required>
        </td>
</table>
<table width="100%" border="0">
        <td>
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono"  maxlength="10" value="<?php echo $alumno->getTelefono() ?>" required>
        </td>
</table>
<table border="0" align="center" width="100%">
       <td align="center" width="50%">
        <br>
               <input type="submit" value="Guardar Datos" class="btn">
               <a href="?c=Alumnos&a=ConsultarAlumnos" class="btn btn-warning">Consultar Alumnos</a>
       </td>
</table>
</table>
</form>
</body>
</p>
</html>









