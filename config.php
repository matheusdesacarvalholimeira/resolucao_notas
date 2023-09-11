<?php 

    class conec {

        public $host;
        public $dbname;
        public $usuario;
        public $pass;

        public $conexao;

        public function __construct($host, $dbname, $usuario, $pass){
            $this->host = $host;
            $this->dbname = $dbname;
            $this->usuario = $usuario;
            $this->pass = $pass;

            $this->config();
        }

        public function config() {
            try {
                $dns = "mysql:host=".$this->host.";dbname=".$this->dbname;
                $this->conexao = new PDO($dns, $this->usuario, $this->pass);
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $erro) {
                die($erro->getMessage());
            }
        }

        public function conecxa(){
            return $this->conexao;
        }
    }



?>