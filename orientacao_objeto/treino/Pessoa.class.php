<?php
    abstract class Pessoa
    {
        public function __construct(protected string $nome = "", protected string $celular){}

        //PROTECTED: só a classe filha consegue pegar as coisas da herança


        //gets e sets
        public function getNome()
        {
            return $this->nome;
        }

        public function getCelular()
        {
            return $this->celular;
        }


        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setCelular($celular)
        {
            $this->celular = $celular;
        }
    } // fim da classe 
?>
