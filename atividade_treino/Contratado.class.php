<?php
    class Contratado extends Pessoa 
    {
        public function __construct(private string $cnpj = "", string $nome = "")
        {
            parent:: __construct($nome);
        }

        //gets e sets
        public function getCnpj()
        {
            return $this->cnpj;
        }

        public function setCnpj($cnpj)
        {
            $this->cnpj = $cnpj;
        }
    } // fim da classe 
?>