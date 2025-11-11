<?php
    class Cliente extends Pessoa 
    {
        public function __construct(private string $cpf = "", string $nome = "")
        {
            parent:: __construct($nome);
        }

        //gets e sets
        public function getCpf()
        {
            return $this->cpf;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

    } // fim da classe 
?>