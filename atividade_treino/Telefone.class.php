<?php
    class Telefones 
    {
        public function __construct(private int $ddd = 0, private string $numero = ""){}

        //gets
        public function getDdd()
        {
            return $this->ddd;  
        }

        public function getNumero()
        {
            return $this->numero;
        }

        //sets
        public function setDdd($ddd)
        {
            $this->ddd = $ddd;
        }

         public function setNumero($numero)
        {
            $this->numero = $numero;
        }
    } // fim da classe 
?>