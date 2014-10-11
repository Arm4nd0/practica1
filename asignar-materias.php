<?php
    require ('Materia.php');
    require('header.php');
    require ('bd.php');
    $Mate = new Materia();
    if(isset($_POST['submit']))
    {
        switch($_POST['submit'])
        {
            case "Seleccionar":
                /*echo "<br>Bot&oacute;n:".$_POST['submit'];*/
                $Mate->AsignarMateriaMaestro($_POST[user]);
                break;
        }
    }
    echo "<div><center><p>";
    $prof=$_POST[user];
    echo "<form action=TestMateria.php method=POST id=materias>";
    echo "<table><tr><td colspan=2 align=center><strong>Asignar Materias</strong></td></tr>";
    echo "<tr><td>Materia: </td><td><select id=materia name=materia>";
    $sql1 = "SELECT * FROM materia WHERE estatus = 1 ORDER BY nombre ASC";
    $re1 = mysql_query($sql1)or die("Error $sql01");
    while($field = mysql_fetch_array($re1))
    {
        $id = $field['id_materia'];
        $opcion = $field['nombre'];
        $sql2="SELECT * FROM maestro_materia WHERE id_maestro = $prof AND id_materia = $id";
        $res03 = mysql_query($sql2)or die("No se ejecuta consulta de materias");
        $existe = mysql_num_rows($res03);
        if($existe > 0)
        {
            echo "<option value=0>Asignada</option>";
        }
        else
        {
            echo "<option value=$id>$opcion</option>";
        }
    }
    echo "</select></td></tr>";
    echo "<tr><td><input type=hidden name=idprof value=$prof /></td></tr>";
    echo "<tr><td><input type=submit name=submit value=Agregar /></td></tr>";
    echo "</table></form></p></center></div>";
?>