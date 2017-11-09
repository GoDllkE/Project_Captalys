<?php
    class Consulta {
        //
        // ============================================================================ \\
        //                               Atributos
        // ============================================================================ \\
        //
        private $id;
        private $ano;
        private $mes;
        private $valor;
        private $idade;
    
        // ============================================================================ \\
        //                             Encapsulamento
        // ============================================================================ \\
        //
        public function getId() {
            return $this->id;
        }
        
        public function setId($id) {
            $this->id = $id;
        }
    
        public function getAno() {
            return $this->ano;
        }
        
        public function setAno($ano) {
            $this->ano = $ano;
        }
        
        public function getMes() {
            return $this->mes;
        }
        
        public function setMes($mes) {
            $this->mes = $mes;
        }
        
        public function getValor() {
            return $this->valor;
        }
        
        public function setValor($valor) {
            $this->valor = $valor;
        }
        
        public function getIdade() {
            return $this->idade;
        }
        
        public function setIdade($idade) {
            $this->idade = $idade;
        }
        //
        // ============================================================================ \\
    }
?>