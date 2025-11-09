<?php
    class Avaliacao
    {
        public function __construct(private float $nota = 0.00, private $avaliador = null){}

        public function getNota()
        {
            return $this -> nota;
        }

        public function setNota($nota)
        {
            $this -> nota = $nota; 
        }

         public function getAvaliador()
        {
            return $this -> avaliador;
        }

        public function setAvaliador($avaliador)
        {
            $this -> avaliador = $avaliador; 
        }
    }
?>