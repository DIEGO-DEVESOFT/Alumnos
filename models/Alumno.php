<?php
class Alumno
{
    # Atributos
    private $dbh;
    protected $Ciclo_escolar;
    protected $Fecha;
    protected $Nombre_completo;
    protected $Apellido_paterno;
    protected $Apellido_materno;
    protected $Genero;
    protected $Fecha_Nacimiento;
    protected $Curp;
    protected $Tipo_sangre;
    protected $Discapacidad;
    protected $Municipio;
    protected $Colonia;
    protected $Telefono;

    # Sobrecarga de Constructores
    public function __construct()
    {
        try {
            $this->dbh = DataBase::connection();
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __construct13($Ciclo_escolar, $Fecha, $Nombre_completo, $Apellido_paterno, $Apellido_materno, $Genero, $Fecha_Nacimiento, $Curp, $Tipo_sangre, $Discapacidad, $Municipio, $Colonia, $Telefono)
    {
        $this->Ciclo_escolar = $Ciclo_escolar;
        $this->Fecha = $Fecha;
        $this->Nombre_completo = $Nombre_completo;
        $this->Apellido_paterno = $Apellido_paterno;
        $this->Apellido_materno = $Apellido_materno;
        $this->Genero = $Genero;
        $this->Fecha_Nacimiento = $Fecha_Nacimiento;
        $this->Curp = $Curp;
        $this->Tipo_sangre = $Tipo_sangre;
        $this->Discapacidad = $Discapacidad;
        $this->Municipio = $Municipio;
        $this->Colonia = $Colonia;
        $this->Telefono = $Telefono;
    }

    # Métodos: ciclo escolar
    public function setCiclo_escolar($Ciclo_escolar)
    {
        $this->Ciclo_escolar = $Ciclo_escolar;
    }
    public function getCiclo_escolar()
    {
        return $this->Ciclo_escolar;
    }
    # Métodos: Fecha
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
    }
    public function getFecha()
    {
        return $this->Fecha;
    }
    # Métodos: Nombre Completo
    public function setNombre_completo($Nombre_completo)
    {
        $this->Nombre_completo = $Nombre_completo;
    }
    public function getNombre_completo()
    {
        return $this->Nombre_completo;
    }
    # Métodos: Apellido paterno
    public function setApellido_paterno($Apellido_paterno)
    {
        $this->Apellido_paterno = $Apellido_paterno;
    }
    public function getApellido_paterno()
    {
        return $this->Apellido_paterno;
    }
    # Métodos: Apellido Materno
    public function setApellido_materno($Apellido_materno)
    {
        $this->Apellido_materno = $Apellido_materno;
    }
    public function getApellido_materno()
    {
        return $this->Apellido_materno;
    }
    # Métodos: Genero
    public function setGenero($Genero)
    {
        $this->Genero = $Genero;
    }
    public function getGenero()
    {
        return $this->Genero;
    }
    # Métodos: Fecha de Nacimiento
    public function setFecha_Nacimiento($Fecha_Nacimiento)
    {
        $this->Fecha_Nacimiento = $Fecha_Nacimiento;
    }
    public function getFecha_Nacimiento()
    {
        return $this->Fecha_Nacimiento;
    }
    # Métodos: Curp
    public function setCurp($Curp)
    {
        $this->Curp = $Curp;
    }
    public function getCurp()
    {
        return $this->Curp;
    }
    # Métodos: Tipo de sangre
    public function setTipo_sangre($Tipo_sangre)
    {
        $this->Tipo_sangre = $Tipo_sangre;
    }
    public function getTipo_sangre()
    {
        return $this->Tipo_sangre;
    }
    # Métodos: Discapacidad
    public function setDiscapacidad($Discapacidad)
    {
        $this->Discapacidad = $Discapacidad;
    }
    public function getDiscapacidad()
    {
        return $this->Discapacidad;
    }
    # Métodos: Municipio
    public function setMunicipio($Municipio)
    {
        $this->Municipio = $Municipio;
    }
    public function getMunicipio()
    {
        return $this->Municipio;
    }
    # Métodos: Colonia
    public function setColonia($Colonia)
    {
        $this->Colonia = $Colonia;
    }
    public function getColonia()
    {
        return $this->Colonia;
    }
    # Métodos: Telefono
    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }
    public function getTelefono()
    {
        return $this->Telefono;
    }

    # CU04 - Registro de Alumno
    public function registrarAlumno()
    {
        try {
            $sql = 'INSERT INTO ALUMNOS VALUES (
                            :Ciclo_escolar,
                            :Fecha,
                            :Nombre_completo,
                            :Apellido_paterno,
                            :Apellido_materno,
                            :Genero,
                            :Fecha_Nacimiento,
                            :Curp,
                            :Tipo_sangre,
                            :Discapacidad,
                            :Municipio,
                            :Colonia,
                            :Telefono
                        )';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('Ciclo_escolar', $this->getCiclo_escolar());
            $stmt->bindValue('Fecha', $this->getFecha());
            $stmt->bindValue('Nombre_completo', $this->getNombre_completo());
            $stmt->bindValue('Apellido_paterno', $this->getApellido_paterno());
            $stmt->bindValue('Apellido_materno', $this->getApellido_materno());
            $stmt->bindValue('Genero', ($this->getGenero()));
            $stmt->bindValue('Fecha_Nacimiento', $this->getFecha_Nacimiento());
            $stmt->bindValue('Curp', $this->getCurp());
            $stmt->bindValue('Tipo_sangre', $this->getTipo_sangre());
            $stmt->bindValue('Discapacidad', $this->getDiscapacidad());
            $stmt->bindValue('Municipio', $this->getMunicipio());
            $stmt->bindValue('Colonia', $this->getColonia());
            $stmt->bindValue('Telefono', $this->getTelefono());
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    # Consultar Alumnos
    public function consultarAlumnosModels()
    {
        try {
            $alumnoList = [];
            $sql = 'SELECT * FROM alumnos WHERE alumnos.Nombre_completo = alumnos.Nombre_completo';
            $stmt = $this->dbh->query($sql);
            foreach ($stmt->fetchAll() as $alumno) {
                $alumnoList[] = new Alumno(
                    $alumno['Ciclo_escolar'],
                    $alumno['Fecha'],
                    $alumno['Nombre_completo'],
                    $alumno['Apellido_paterno'],
                    $alumno['Apellido_materno'],
                    $alumno['Genero'],
                    $alumno['Fecha_nacimiento'],
                    $alumno['Curp'],
                    $alumno['Tipo_sangre'],
                    $alumno['Discapacidad'],
                    $alumno['Municipio'],
                    $alumno['Colonia'],
                    $alumno['Telefono']
                );
            }
            return $alumnoList;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    # CU06 - Actualizar Alumnos
    public function actualizarAlumno()
    {
        try {
            $sql = 'UPDATE ALUMNOS SET
                        Ciclo_escolar = :Ciclo_escolar,
                        Fecha = :Fecha,
                        Nombre_completo = :Nombre_completo,
                        Apellido_paterno = :Apellido_paterno,
                        Apellido_materno = :Apellido_materno,
                        Genero = :Genero,
                        Fecha_nacimiento = :Fecha_nacimiento,
                        Curp = :Curp,
                        Tipo_sangre = :Tipo_sangre,
                        Discapacidad = :Discapacidad,
                        Municipio = :Municipio,
                        Colonia = :Colonia,
                        Telefono = :Telefono

                    WHERE Ciclo_escolar = :Ciclo_escolar';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('Ciclo_escolar', $this->getCiclo_escolar());
            $stmt->bindValue('Fecha', $this->getFecha());
            $stmt->bindValue('Nombre_completo', $this->getNombre_completo());
            $stmt->bindValue('Apellido_paterno', $this->getApellido_paterno());
            $stmt->bindValue('Apellido_materno', $this->getApellido_materno());
            $stmt->bindValue('Genero', ($this->getGenero()));
            $stmt->bindValue('Fecha_nacimiento', $this->getFecha_Nacimiento());
            $stmt->bindValue('Curp', $this->getCurp());
            $stmt->bindValue('Tipo_sangre', $this->getTipo_sangre());
            $stmt->bindValue('Discapacidad', $this->getDiscapacidad());
            $stmt->bindValue('Municipio', $this->getMunicipio());
            $stmt->bindValue('Colonia', $this->getColonia());
            $stmt->bindValue('Telefono', $this->getTelefono());
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    # CU07 - Obtener Usuario por Id
    public function obtenerAlumnoPorId($Ciclo_escolar)
    {
        try {
            $sql = "SELECT * FROM ALUMNOS WHERE Ciclo_escolar=:Ciclo_escolar";
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('Ciclo_escolar', $Ciclo_escolar);
            $stmt->execute();
            $AlumnoDB = $stmt->fetch();
            $Alumno = new Alumno(        
                $AlumnoDB['Ciclo_escolar'],
                $AlumnoDB['Fecha'],
                $AlumnoDB['Nombre_completo'],
                $AlumnoDB['Apellido_paterno'],
                $AlumnoDB['Apellido_materno'],
                $AlumnoDB['Genero'],
                $AlumnoDB['Fecha_nacimiento'],
                $AlumnoDB['Curp'],
                $AlumnoDB['Tipo_sangre'],
                $AlumnoDB['Discapacidad'],
                $AlumnoDB['Municipio'],
                $AlumnoDB['Colonia'],
                $AlumnoDB['Telefono']
            );
            return $Alumno;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    # CU08 - Eliminar Alumno
    public function eliminarAlumno($Ciclo_escolar)
    {
        try {
            $sql = 'DELETE FROM ALUMNOS WHERE Ciclo_escolar = :Ciclo_escolar';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('Ciclo_escolar', $Ciclo_escolar);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
