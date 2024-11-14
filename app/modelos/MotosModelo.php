<?php
/**
 * MotosModelo.php     
 * Capa modelo contiene a la interfaz <$db> para gestionar 
 * las operaciones de lectura/escritura/eleminación de un recordSet
 * de una tabla en base de datos.
 */

class MotosModelo
{
    private $db;

    // Define la interfaz para gestionar operaciones con bases de datos
    function __construct()
    {
        $this->db = new MySQLdb(); // Define interfaz para gestionar PHP con base de datos
    }

    // Retorna un arreglo de todos los elementos tipo recordSet de la tabla motos
    public function getMotos()
    {
        $data = $this->db->querySelect("SELECT * FROM motos");
        return $data;
    }

    // Retorna UN recordSet de la tabla Motos basado en el ID
    public function getMoto($id) // Cambié el nombre de la función a singular
    {
        $data = $this->db->querySelect("SELECT * FROM motos WHERE id=" . $id);
        return $data;
    }

    // Inserta un recorSet a la tabla motos
    public function insertarMotos($marca, $modelo, $año, $precio)
    { 
        // Confecciona una consulta de inserción de un recorSet
        $sql = "INSERT INTO motos (id,marca,modelo,año,precio) VALUES(0,"; // 0: autoincrementa ID
        $sql .= "'".$marca."', ";
        $sql .= "'".$modelo."', ";
        $sql .= "'".$año."', ";
        $sql .= "'".$precio."')";
    
        // Ejecuta una sentencia de inserción
        if ($this->db->queryNoSelect($sql)) {
            // Muestra el dashboard
            header("location:".RUTA_APP."Motos");
            exit();
        } else {
            exit("Error al insertar los datos de la Moto");
        }
    }

    // Realiza una actualización de un recorSet a la tabla de motos
    public function modificarMotos($id, $marca, $modelo, $año, $precio)
    {
        // Confecciona la sentencia de actualización
        $sql = "UPDATE Motos SET ";
        $sql .= "marca='".$marca."', ";
        $sql .= "modelo='".$modelo."', ";
        $sql .= "año='".$año."', ";
        $sql .= "precio='".$precio."' ";
        $sql .= "WHERE id=".$id;
    
        // Ejecuta una sentencia de actualización
        if ($this->db->queryNoSelect($sql)) {
            // Muestra el dashboard
            header("location:".RUTA_APP."Motos");
            exit();
        } else {
            exit("Error al modificar los datos de la Moto");
        }
    }

    // Borra un registro seleccionado $id mediante una consulta no selectiva
    public function borrarMotos($id)
    {
        $sql = "DELETE FROM Motos WHERE id=" . $id;
        if ($this->db->queryNoSelect($sql)) {
            header("location:".RUTA_APP."Motos");
            exit();
        } else {
            exit("Error al borrar la Moto");
        }
    }
}
?>
