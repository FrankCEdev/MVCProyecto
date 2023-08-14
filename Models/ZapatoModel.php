<?php
    Class ZapatoModel {
        private $db;
        private $zapatos;
    
        public function __construct(){
            $this->db = Conectar::conexion();
            $this->zapatos = array();
        }
    
        public function getZapatos(){
            $consulta = $this->db->query("SELECT zapatos.IDZAPATO as id, modelos.NOMMODELO as model, zapatos.ESTILOZAPATO as style, 
            modelos.COLORMODELO as color, marcas.NOMBREMARCA as marca, inventarios.talla as talla, 
            zapatos.PRECIOZAPATO as prec, inventarios.STOCK as inv
            from zapatos inner join modelos on zapatos.IDMODELO=modelos.IDMODELO
            inner join inventarios on modelos.IDMODELO=inventarios.IDMODELO
            inner join marcas on modelos.IDMARCA=marcas.IDMARCA;");
            while($filas = $consulta->fetch_assoc()){
                $this->zapatos[] = $filas;
            }
            return $this->zapatos;
        }
        
        public function insertar($IDZAPATO, $IDMODELO, $ESTILOZAPATO, $PRECIOZAPATO){
           
            $result = $this->db->query("INSERT INTO inventarios (IDZAPATO, IDMODELO, ESTILOZAPATO, PRECIOZAPATO) VALUES('$IDZAPATO','$IDMODELO','$ESTILOZAPATO','$PRECIOZAPATO')");

            }

        public function deleteZapato($id){
            $consulta = $this->db->query("DELETE FROM zapatos WHERE idzapato = $id");
        }
    }
?>
