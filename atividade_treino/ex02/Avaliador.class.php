<?php
    class Avaliador extends Pessoa
    {
        public function __construct(private string $cpf, string $nome = "", private array $avaliacao = [])
        {
            parent:: __construct($nome);
        }

        public function getCpf()
        {
            return $this -> cpf;
        }

        public function setCpf($cpf)
        {
             $this -> cpf = $cpf;
        }

        public function getAvaliacao()
        {
            return $this -> avaliacao;
        }

        public function setAvaliacao($avaliacao)
        {
             $this -> avaliacao = $avaliacao;
        }
    }
?>

