<?php
    //class Maestro extends User
    class Maestro
    {
        private $Materia;
        private $Nombre;
        public function ConsultarMaterias($idln)
        {
            $sql01="SELECT maestro_materia.`id_mm`,materia.`nombre`, personascontrol.`nombre` AS namess
            FROM maestro_materia,materia,personascontrol
            WHERE maestro_materia.`id_maestro` = personascontrol.`IdPersona`
            AND maestro_materia.`id_materia`= materia.`id_materia`
            AND personascontrol.`IdPersona` = $idln";
            $consulta = mysql_query($sql01) or die ("error 1 de consulta a materia");
            echo "<div class=table-resposive align=center>";
            echo "<table class=\*table table-striped\ border=1>";
            echo "<tr><td colspan=2 align=center>Materias Asignadas</td></tr>";
            while($field = mysql_fetch_array($consulta))
            {
                $this->id = $field['id_mm'];
                $this->Nombre = $field['nombre'];
                $this->asignado = $field['namess'];
                echo "<tr><td>$this->Nombre</td></tr>";
            }
            echo "</table>";
            echo "</div>";
        }
    }
?>