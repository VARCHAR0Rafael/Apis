<?php
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:host=52.152.236.67;dbname=g2_19","G2_19","kytDBBnX");
                return $conectar;
            } catch(Exeption $e){
                print "¡Error DB!: ".e->getMessage() . "<br/>";
                die();
            }
        }
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }

?>
