<?php
    require_once "models/alumno.php";
    
    class Alumnos{
        public function __construct(){}
        public function index(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                require_once "views/header.view.php";
                require_once "views/index.php";
                require_once "views/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $Alumno = new Alumno(
                    $_POST['Ciclo_escolar'],
                    $_POST['fecha'],
                    $_POST['nombre'],
                    $_POST['apellido'],
                    $_POST['apellidos'],
                    $_POST['genero'],
                    $_POST['fechas'],
                    $_POST['curp'],
                    $_POST['sangre'],
                    $_POST['discapacidad'],
                    $_POST['municipio'],
                    $_POST['colonia'],
                    $_POST['telefono']
                );
                $Alumno->registrarAlumno();
                // header("Location: ?c=Users&a=consultarEmpleados");
                header("Location: ?c=Alumnos&a=consultarAlumnos");
            }            
        }

          public function consultarAlumnos(){
              if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                  $alumnos = new Alumno;
                  $alumnos = $alumnos->consultarAlumnosModels();
                    require_once "views/header.view.php";
                    require_once "views/consultar_alumnos.view.php";
                    require_once "views/footer.view.php";
              }            
          }


        public function actualizarAlumnos() {
             if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                 $alumno = new alumno;
                 $alumno = $alumno->obtenerAlumnoPorId($_GET['Ciclo_escolar']);
                require_once "views/header.view.php";
                require_once "views/update.alumnos.view.php";
                require_once "views/footer.view.php";
             }
             if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                 $Alumno = new Alumno(                    
                    $_POST['Ciclo_escolar'],
                    $_POST['fecha'],
                    $_POST['nombre'],
                    $_POST['apellido'],
                    $_POST['apellidos'],
                    $_POST['genero'],
                    $_POST['fechas'],
                    $_POST['curp'],
                    $_POST['sangre'],
                    $_POST['discapacidad'],
                    $_POST['municipio'],
                    $_POST['colonia'],
                    $_POST['telefono']
                 );                
                 $Alumno->actualizarAlumno();
                 header("Location: ?c=Alumnos&a=consultarAlumnos");
             }
        }




         public function eliminarAlumnos() {
             $Alumno = new Alumno;            
             $Alumno->eliminarAlumno($_GET['Ciclo_escolar']);
             header("Location: ?c=Alumnos&a=consultarAlumnos");
         }
        
    }
?>