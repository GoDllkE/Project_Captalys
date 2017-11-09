<?php
    require_once '../DAO/Conexao.php';
    require_once '../Models/Consulta.php';
    
    class ConsultaDAO {
     
        function listaValoresAnuais() {
            // Objetos
            $conn = new Conexao();
            $conector = $conn->abreConexao();
            
            $sql = "SELECT ano, avg(valor) FROM consultas GROUP BY ano";
            $dataset = mysqli_query($conector, $sql);
            
            return $dataset;
        }
        
        function listaValoresIdade() {
            // Objetos
            $conn = new Conexao();
            $conector = $conn->abreConexao();
            
            $sql = "SELECT idade, avg(valor) FROM consultas GROUP BY idade";
            $dataset = mysqli_query($conector, $sql);
            
            return $dataset;
        }
        
        function listaValoresMes() {
            // Objetos
            $conn = new Conexao();
            $conector = $conn->abreConexao();
            
            $sql = "SELECT idade, avg(valor) FROM consultas GROUP BY idade";
            $dataset = mysqli_query($conector, $sql);
            
            return $dataset;
        }
        
        function listaValoresMensalAnual($ano) {
            // Objetos
            $conn = new Conexao();
            $conector = $conn->abreConexao();
            
            $sql = "SELECT mes, avg(valor) FROM consultas WHERE ano=".$ano." GROUP BY mes;";
            $dataset = mysqli_query($conector, $sql);
            
            return $dataset;
        }
        
    }
?>