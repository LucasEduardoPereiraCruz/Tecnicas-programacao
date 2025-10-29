<?php
    Class Pessoa 
    {
        private array $celular  = array();
        public function __construct(
            private string $nome = "",
            int $ddd = 0, string $numero = "") 
            {
                $this -> celular[] = new Celular ($ddd, $numero);
            }

        public function getNome(){
            return $this->nome;
        }
        public function setCelular(int $ddd, string $numero)
        {
            $this -> celular[] = new Celular($ddd, $numero);
        }
    }
?>