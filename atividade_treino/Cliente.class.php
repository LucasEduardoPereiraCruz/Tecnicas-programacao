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

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }
    } // fim da classe 
?>