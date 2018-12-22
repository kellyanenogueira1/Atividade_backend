<?php

    class Database {
        private $host = 'localhost';
        private $user = 'root';
        private $senha = '';
        private $database = 'bancodedados';

        public function Connection (){
            $conecta = mysqli_connect($this->host, $this->user, $this->senha, $this->database); 
            mysqli_set_charset($conecta, 'utf8'); //Ajustando a comunicação entre a aplicação e o bd

            if(mysqli_connect_errno()){
                echo 'Não foi possível conectar-se ao BD' .mysqli_connect_error();
            }
            return $conecta;
        }
    }

?>