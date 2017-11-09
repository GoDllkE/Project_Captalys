<?php
    require_once '../DAO/Conexao.php';
    require_once '../Models/Usuario.php';
    
    class UsuarioDAO {
        
        // ------------------------------------------------------------------------- \\
        //
        function salvaUsuario($usuario) {
            $conn = new Conexao();
            $conector = $conn->abreConexao();

            // SQL
            $sql = "INSERT INTO usuario (login,senha) VALUES "
                    . "('".$usuario->getLogin()."','".$usuario->getSenha()."')";

            $sqlRun = mysqli_query($conector, $sql);
            $conector = $conn->fechaConexao($conector);
            return true;
        }
        
        // ------------------------------------------------------------------------- \\
        //
        function listaUsuario() {
            $conn = new Conexao();
            $conector = $conn->abreConexao();

            // SQL
            $sql = "SELECT * FROM usuario";
            
            $sqlRun = mysqli_query($conector, $sql);
            $conector = $conn->fechaConexao($conector);

            $sqlData = mysqli_fetch_array($sqlRun);
            return $sqlData;
        }
        
        // ------------------------------------------------------------------------- \\
        //
        function loginUsuario($usuario) {
            $conn = new Conexao();
            $conector = $conn->abreConexao();

            // SQL
            $sql = "SELECT * FROM usuario WHERE "
                    . "login = '".$usuario->getLogin()."' AND "
                    . "senha = '".$usuario->getSenha()."'";

            echo "alert(".$sql.")";
            
            $sqlRun = mysqli_query($conector, $sql);
            $conector = $conn->fechaConexao($conector);

            if(mysqli_num_rows($sqlRun) == 1) { return true; } 
            else { return false; }
        }
    
        // ------------------------------------------------------------------------- \\
        // Para o caso de ser pensado que "vai deletar outros usuarios",
        // basta adicionar "unique" a coluna login no banco de dados e solucionado.
        // ;)
        function deletaUsuario($usuario) {
            $conn = new Conexao();
            $conector = $conn->abreConexao();

            // SQL
            $sql = "DELETE FROM usuario WHERE "
                    . "login = '".$usuario->getLogin()."'";

            $sqlRun = mysqli_query($conector, $sql);
            $conector = $conn->fechaConexao($conector);
            return true;
        }
        
        // ------------------------------------------------------------------------- \\
    }
        
?>