<?php
    Class ZapatoController {

        public function __construct(){
            require_once "Models/ZapatoModel.php";
        }
        
         public function index(){
            $objInventario = new Zapato_Model();
            $data["zapatos"] = $objInventario->get_Zapatos();

            require_once "Views/zapatos_mostrar.php";
        }

        public function agregar(){
            require_once "Views/zapato_agregar.php";
        }

        public function guardar(){
            $IDINVENTARIO = $_POST['IDZAPATO'];
            $IDMODELO = $_POST['IDMODELO'];
            $TALLA = $_POST['ESTILOZAPATO'];
            $STOCK = $_POST['PRECIOZAPATO'];

            $objInventario = new Inventario_Model();
            $objInventario->insertar($IDZAPATO, $IDMODELO, $ESTILOZAPATO, $PRECIOZAPATO);
            
            $this->index();
        }
        
        public function delete($id){
            $objZapato = new ZapatoModel();
            $objZapato->deleteZapato($id);
            $this->mostrarDelete();
        }

        public function mostrarDelete(){
            $objZapato = new ZapatoModel();
            $data["zapatos"] = $objZapato->getZapatos();

            require_once "Views/Delete.php";
        }
   
    }
?>
