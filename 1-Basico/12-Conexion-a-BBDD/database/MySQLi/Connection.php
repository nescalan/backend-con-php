<?php

namespace Database\MySQLi;

class Connection
{
    private static $instance;
    private $connection;

    private function __constructor()
    {
        $this->make_connection();
    }

    public static function getInstance()
    {

        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;

    }

    public function get_database_instance()
    {
        return $this->connection;
    }

    private function make_connection()
    {
        require_once "../Login/login.php";


        // Coneccion
        $mysqli = new \mysqli($server, $user, $password, $database);

        // Comprobar conexion
        if ($mysqli->connect_errno) {
            # Error
            die("No hemos podido realizar su consulta");
        } else {
            # Success...
            echo "Conexion MySQLi realizada correctamente";
        }

        $this->connection = $mysqli;

    }

}

?>