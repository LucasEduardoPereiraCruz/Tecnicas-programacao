<?php
    class Chef extends Pessoa
    {
        public function __construct(private string $especialidade, string $nome = "", private array $receita = [])
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

        public function getReceita()
        {
            return $this -> receita;
        }

        public function setReceita($receitas)
        {
             $this -> receita = $receitas;
        }
    }
?>

