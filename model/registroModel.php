<?php

class registroModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function registrarUsuario($nombre, $apellido, $legajo, $dni, $fecha_nacimiento, $tipo_licencia, $email, $contraseña)
    {
        $sql = "INSERT INTO Usuario (nombre,apellido,legajo,dni,fecha_nacimiento,tipo_licencia,email,contraseña)
VALUES('$nombre','$apellido','$legajo','$dni','$fecha_nacimiento','$tipo_licencia','$email','$contraseña')";
        $this->database->query($sql);
    }
}