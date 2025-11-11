<?php
    class Proprietario extends Pessoa
    {
        public function __construct(private string $cpf = "", string $nome = "")
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
    } // Fim da classe 
?>

