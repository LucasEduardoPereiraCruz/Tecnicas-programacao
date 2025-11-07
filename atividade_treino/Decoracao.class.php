<?php
    class Decoracao 
    {
        public function __construct(private string $descritivo = ""){}
       

        //gets e sets
        public function getDescritivo()
        {
            return $this->descritivo;
        }

        public function setDescritivo($descritivo)
        {
            $this->descritivo = $descritivo;
        }
    } // fim da classe 
?>