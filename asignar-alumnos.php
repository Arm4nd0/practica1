<?php
    require ('Grupo.php');
    require('header.php');
    require ('bd.php');
    //Objeto de la clase grupo
    $Grup = new Grupo();
    if($_SERVER['REQUEST_METHOD']==POST)
    {
        $idalu = $_POST[user1];
        $idgrup = $_POST[user2];
        $count = count($idalu);
        for($i = 0; $i < $count; $i++)
        {
            $idalumno = $idalu[$i];
            $Grup->InsertVal($idalumno,$idgrup);
        }
    }
    $Grup->AlumnosAsignadosGrupo($idgrup);
?>