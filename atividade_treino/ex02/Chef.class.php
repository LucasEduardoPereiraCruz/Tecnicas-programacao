<?php
    class Chef extends Pessoa
    {
        public function __construct(private string $especialidade, string $nome = "")
        {
            parent:: __construct($nome);
        }

        public function getEspecialidade()
        {
            return $this -> especialidade;
        }

        public function setEspecialidade($especialidade)
        {
             $this -> especialidade = $especialidade;
        }
    }
?>