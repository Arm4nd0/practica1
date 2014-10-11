<?php
    require('bd.php');
    class Materia
    {
        private $Id;
        private $Nombre;
        private $Avatar;
        private $Orden;
        private $Estatus;
        public function InsertVal()
        {
            echo "<br>entro a metodo insertar";
        }
        public function BuscarEspecif()
        {
            echo "<br>entro a metodo busqueda especifica";
        }
        public function BuscarGenerl()
        {
            echo "<br>entro a metodo busqueda general";
        }
        public function DeleteReg($id)
        {
            echo "<br>entro a metodo eliminar registro";
            $delete01 = "DELETE FROM maestro_materia WHERE id_mm = $id";
            $execute = mysql_query($delete01) or die ("Error al eliminar");
            echo "Elimino el registro $id";
        }
        public function Modificar()
        {
            echo "<br>entro a metodo modificar";
        }
        public function AsignarMateriaMaestro($user)
        {
            $sql01="SELECT materia.`nombre`,concat( personascontrol.`nombre`,'',personascontrol.Apat,'',personascontrol.Amat) AS namess ,maestro_materia.`id_mm` FROM maestro_materia,materia,personascontrol WHERE maestro_materia.`id_maestro` = personascontrol.`IdPersona` AND maestro_materia.`id_materia`=materia.`id_materia` AND personascontrol.`IdPersona` = $user ";
            $consulta = mysql_query($sql01) or die ("error 1 de consulta a materia");
            echo "<div class=table-resposive align=center>";
            echo "<table class=\*table table-striped border=1 align=center\>";
            echo "<tr><td colspan=2 align=center>Materias Asignadas</td></tr>";
            /*echo"<tr><td>Materias</td><td>Eliminar Materia</td></tr>";*/
            while($field = mysql_fetch_array($consulta))
            {
                $this->id = $field['id_mm'];
                $this->Nombre = $field['nombre'];
                $this->asignado = $field['namess'];
                echo "<tr><td>$this->Nombre</td>
                <td>
                    <form name=eliminar action=TestMateria.php method=Post align=center><input type=hidden name=id value=$this->id /><input type=submit name=submit value=Eliminar /></form>
                </td></tr>";
            }
            echo "<tr><td colspan=2 align=center>Profesor: $this->asignado </td></tr>";
            echo "</table>";
            echo "</div>";
        }
        public function Agregarme($idprof,$idmat)
        {
            $insert01 = "INSERT INTO maestro_materia(id_maestro,id_materia) VALUES ($idprof,$idmat)";
            $execute = mysql_query($insert01) or die ("Error al insertar");
        }
        public function AsignarMateriaGrupos()
        {
        }
    }
?>