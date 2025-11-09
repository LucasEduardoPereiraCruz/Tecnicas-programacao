<?php
    class Avaliador extends Pessoa
    {
        public function __construct(private string $cpf, string $nome = "")
        {
            parent:: __construct($nome);
        }

        public function getcpf()
        {
            return $this -> cpf;
        }

        public function setEspecialidade($cpf)
        {
             $this -> cpf = $cpf;
        }
    }
?>