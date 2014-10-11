<?php
    require ('Alumno.php');
    $Alumno = new Alumno();
    $Alumno->InsertarDatos();
    $Alumno->ConsultaGenral();
    $Alumno->ConsultarDatos();
    $Alumno->DeleteReg();
    $Alumno->UpdateDatos();
?>