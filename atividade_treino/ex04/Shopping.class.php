<?php
    class Shopping extends Pessoa
    {

        public function __construct(private string $cnpj = "", string $nome = "", private array $lojas = [])
        {
            parent:: __construct($nome);
            // CONSTRUTOR LIMPO, APENAS COM CNPJ E NOME
        }

        public function getCnpj()
        {
            return $this -> cnpj;
        }

        public function getLojas() // Retorna a coleção
        {
            return $this -> lojas;
        }


        public function setCnpj($cnpj)
        {
            $this->cnpj = $cnpj;
        }

        // O método SET agora recebe um objeto Loja PRONTO (Agregação)
        public function setLoja($loja)
        {
            $this -> lojas[] = $loja;
        }
    } // Fim da classe 
?>
