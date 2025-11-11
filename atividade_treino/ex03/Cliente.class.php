<?php
    class Cliente extends Pessoa 
    {
        public function __construct(private string $cpf = "", string $nome = "", string $celular = "")
        {
            parent:: __construct($nome, $celular);
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

