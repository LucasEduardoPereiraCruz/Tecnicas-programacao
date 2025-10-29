<?php
    class Filme 
    {
        public function __construct(
           private string $titulo = "",){ }

        public function geTitulo(){
            return $this->titulo;
        }

        public function getNumero(){
            return $this->numero;
        }
      
    }
?>