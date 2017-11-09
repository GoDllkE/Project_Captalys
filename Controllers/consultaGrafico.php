<?php
    // Requititos
    require_once '../DAO/ConsultaDAO.php';
    
    class consultaGrafico {        
        
        // Retorna dataset com valores da média de cada ano
        function geraValoresMediaAnual() {
            $dao = new ConsultaDAO();
            $dataset = $dao->listaValoresMediaAnual();
            $arrayValores = array();
            
            // [Teste]
            while($data = mysqli_fetch_array($dataset)) {
                $arrayValores = array(''.$data["Ano"].'', ''.$data["Media"].'');
            }
            
            // Retorna array de dados
            return $arrayValores;
        }
        
        // Retorna dataset com valores da média de cada idade
        function geraValoresMediaIdade() {
            $dao = new ConsultaDAO();
            $dataset = $dao->listaValoresMediaIdade();
            $arrayValores = array();
            
            // [Teste]
            while($data = mysqli_fetch_array($dataset)) {
                $arrayValores = array(''.$data["Idade"].'', ''.$data["Media"].'');
            }
            
            // Retorna array de dados
            return $arrayValores;
        }
        
        // Retorna dataset com valores da média de cada mes
        function geraValoresMediaMes() {
            $dao = new ConsultaDAO();
            $dataset = $dao->listaValoresMediaMes();
            $arrayValores = array();
            
            // [Teste]
            while($data = mysqli_fetch_array($dataset)) {
                $arrayValores = array(''.$data["Idade"].'', ''.$data["Media"].'');
            }
            
            // Retorna array de dados
            return $arrayValores;
        }
        
        // Retorna dataset com valores da média de cada mes de um ano especifico
        function geraValoresMediaMesAno($ano) {
            $dao = new ConsultaDAO();
            $dataset = $dao->listaValoresMensalAnual($ano);
            $arrayValores = array();
            
            // [Teste]
            while($data = mysqli_fetch_array($dataset)) {
                $arrayValores = array(''.$data["Mes"].'', ''.$data["Media"].'');
            }
            
            // Retorna array de dados
            return $arrayValores;
        }
        
    }
?>