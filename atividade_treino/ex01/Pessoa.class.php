<?php
    abstract class Pessoa 
    {
        private array $telefones = [];

        public function __construct(protected string $nome = "") {}

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getTelefones()
        {
            return $this->telefones;
        }

        public function setTelefones(array $telefones)
        {
            $this->telefones = $telefones;
        }

    }
?>
