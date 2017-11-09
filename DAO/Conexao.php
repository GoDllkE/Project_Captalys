<?php
    class Conexao {
        // Dados da conexao
        private $host = "localhost";
        private $user = "captalys";
        private $password = "123456";
        private $database = "hospitais";
        
        function abreConexao() {
            $conector = mysqli_connect($this->host, $this->user, $this->password, $this->database)
                    or die(mysqli_error($conector));
            return $conector;
        }
        
        function fechaConexao($conector) {
            mysqli_close($conector);
        }
    }
?>