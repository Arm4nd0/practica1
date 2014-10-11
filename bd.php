<?php
    /*$base= "sistemaescolar";
    $server="localhost";
    $user="root";
    $pass="";
    $conexion = mysql_connect($server,$user,$pass)or die ("error de conexion");
    mysql_select_db($base,$conexion) or die("la Base de Datos no existe");
    mysql_query("SET NAMES utf8");*/
    $conexion=mysql_connect("localhost","root","")or die("error de conexion");
    $base=mysql_select_db("sistemaescolar",$conexion) or die("error de base");
    mysql_query("SET NAMES 'UTF8'");
?>