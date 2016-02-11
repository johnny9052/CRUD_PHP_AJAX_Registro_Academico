<?php

abstract class Conexion {

    private $usuario;
    private $password;
    private $database;
    private $puerto;
    private $host;
    private $cadenaconexion;
    private $connect;

    public function conectar() {
        $this->usuario = "postgres";
        $this->password = "admin";
        $this->database = "registroAcademico";
        $this->puerto = 5432;
        $this->host = "localhost";
        $this->cadenaconexion = "host=$this->host port=$this->puerto dbname=$this->database user=$this->usuario password=$this->password";

        $this->connect = pg_connect($this->cadenaconexion) or die("Error al realizar la conexion");
    }

    public function acceder_conexion() {
        return $this->connect;
    }

    function respuesta($resultado) {
        if ($resultado) {
            $mensaje = "true";
        } else {
            $mensaje = "false";
        }

        echo '[{"res" : "' . $mensaje . '"}]';
    }

    function listadoRegistro($resultado) {
        while ($reg = pg_fetch_array($resultado, null, PGSQL_ASSOC)) {
            $vec[] = $reg;
        }
        if (isset($vec)) {
            echo(json_encode($vec));
        } else {
            echo '[{"res" : "0"}]';
        }
    }

}

?>