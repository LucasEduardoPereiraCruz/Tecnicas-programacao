<?php
    class Telefone 
    {
        public function __construct(private int $ddd = 0, private string $numero = ""){}

        public function getDdd()
        {
            return $this -> ddd;
        }
        
        public function setDdd($ddd)
        {
            $this -> ddd = $ddd;
        }

         public function getNumero()
        {
            return $this -> numero;
        }

         public function setNumero($numero)
        {
            $this -> numero = $numero;
        }
    }
?>