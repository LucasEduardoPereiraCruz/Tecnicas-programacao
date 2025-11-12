<?php
    class Proprietario extends Pessoa
    {
        public function __construct(private string $cpf = "", string $nome = "", private array $lojas = [])
        {
            parent:: __construct($nome);
        }

        public function getCpf()
        {
            return $this -> cpf;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

         public function getLojas()
        {
            return $this -> lojas;
        }

        public function setLojas($lojas)
        {
            $this->lojas[] = $lojas;
        }
    } // Fim da classe 
?>
