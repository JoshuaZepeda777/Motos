<?php 
/**
 * Motos
 */
class Motos extends Controlador
{
   private $modelo;
   /*define un objeto para acceder a los métodos definidos en class MotosModelo() */
   function __construct()
   {
       $this->modelo = $this->modelo("MotosModelo");
   }

   /*retorna de la tabla motos un arreglo de todos los recordSet y renderiza éstos en el dashboard*/
   public function index()
   {
       $data = $this->modelo->getMotos();
       /*renderiza en el dashboard los datos del recordSet*/
       $this->vista("MotosVista", $data);
   }

   /* se realiza una petición de envio de un arreglo de datos, generada por un <submit> vía POST.
      Verifica qué variables están pasadas por el método POST, 
      determina si la variable está definida y la asigna, si no asigna un campo vacío.
   */
   public function modificar($id = "")
   {
       if ($_SERVER['REQUEST_METHOD'] == "POST") {
           /* Recolecta atributos de un registro $id */
           $id = isset($_POST["id"]) ? $_POST["id"] : "";
           $marca = isset($_POST["marca"]) ? $_POST["marca"] : "";
           $modelo = isset($_POST["modelo"]) ? $_POST["modelo"] : "";
           $año = isset($_POST["año"]) ? $_POST["año"] : "";
           $precio = isset($_POST["precio"]) ? $_POST["precio"] : "";
           /* Asigna y actualiza los atributos de un registro id seleccionado */
           $this->modelo->modificarMotos($id, $marca, $modelo, $año, $precio);
       } else {
           $data = $this->modelo->getMoto($id);
           $datos = [
               "id" => $id,
               "marca" => $data[0]["marca"],
               "modelo" => $data[0]["modelo"],
               "precio" => $data[0]["precio"],
               "año" => $data[0]["año"]
           ];
           $this->vista("MotosModificar", $datos);
       }
   }

   /* Elimina un registro de la base de datos cuando se presiona el botón submit <Enviar> */
   public function borrar($id = "")
   {
       if ($_SERVER['REQUEST_METHOD'] == "POST") {
           /* Verifica la existencia de un identificador */
           $id = isset($_POST["id"]) ? $_POST["id"] : "";
           /* Invoca la ejecución de eliminar un registro */
           $this->modelo->borrarMotos($id);
       } else {
           /* Retorna y muestra recordSet seleccionado */
           $data = $this->modelo->getMoto($id);
           $datos = [
               "id" => $id,
               "marca" => $data[0]["marca"],
               "modelo" => $data[0]["modelo"],
               "precio" => $data[0]["precio"],
               "año" => $data[0]["año"]
           ];
           /* Actualiza vista y muestra dashboard */
           $this->vista("MotosBorrar", $datos);
       }
   }

   /* Inserta una nueva moto */
   public function alta()
   {
       if ($_SERVER['REQUEST_METHOD'] == "POST") {
           $marca = isset($_POST["marca"]) ? $_POST["marca"] : "";
           $modelo = isset($_POST["modelo"]) ? $_POST["modelo"] : "";
           $año = isset($_POST["año"]) ? $_POST["año"] : "";
           $precio = isset($_POST["precio"]) ? $_POST["precio"] : "";

           $this->modelo->insertarMotos($marca, $modelo, $año, $precio);
       } else {
           $this->vista("MotosAlta");
       }
   }
}
?>
