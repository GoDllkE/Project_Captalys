<?php
    require_once '../DAO/Conexao.php';
    require_once '../Models/Consulta.php';
    
    class ConsultaDAO {
     
        
        function listaAnos() {
            // Objetos
            $conn = new Conexao();
            $conector = $conn->abreConexao();
            
            $sql = "SELECT ano as Ano FROM consultas GROUP BY ano";
            $dataset = mysqli_query($conector, $sql);
            
            return $dataset;
        }
        
        // ------------------------------------------------------------------------- \\
        //
        function listaValoresMediaAnual() {
            // Objetos
            $conn = new Conexao();
            $conector = $conn->abreConexao();
            
            $sql = "SELECT ano as Ano, avg(valor) as Media FROM consultas GROUP BY ano";
            $dataset = mysqli_query($conector, $sql);
            
            return $dataset;
        }
        
        // ------------------------------------------------------------------------- \\
        //
        function listaValoresMediaIdade() {
            // Objetos
            $conn = new Conexao();
            $conector = $conn->abreConexao();
            
            $sql = "SELECT idade as Idade, avg(valor) as Media FROM consultas GROUP BY idade";
            $dataset = mysqli_query($conector, $sql);
            
            return $dataset;
        }
        
        // ------------------------------------------------------------------------- \\
        //
        function listaValoresMediaMes() {
            // Objetos
            $conn = new Conexao();
            $conector = $conn->abreConexao();
            
            $sql = "SELECT idade as Idade, avg(valor) as Media FROM consultas GROUP BY idade";
            $dataset = mysqli_query($conector, $sql);
            
            return $dataset;
        }
        
        // ------------------------------------------------------------------------- \\
        //
        function listaValoresMensalAnual($ano) {
            // Objetos
            $conn = new Conexao();
            $conector = $conn->abreConexao();
            
            $sql = "SELECT mes as Mes, avg(valor) as MediaFROM consultas WHERE ano=".$ano." GROUP BY mes;";
            $dataset = mysqli_query($conector, $sql);
            
            return $dataset;
        }
        
    }
?>