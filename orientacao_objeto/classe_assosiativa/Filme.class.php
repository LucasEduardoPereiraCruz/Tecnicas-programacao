<?php
    class Filme 
    {
        public function __construct(
           private string $titulo = "", private string $numero){ }

        public function geTitulo(){
            return $this->titulo;
        }

        public function getNumero(){
            return $this->numero;
        }
      
    }
?>