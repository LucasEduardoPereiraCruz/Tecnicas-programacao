<?php
    class Servico 
    {
        public function __construct(private string $descritivo = "", private float $preco = 0.00, private string $status = ""){}

        public function getDescritivo()
        {
            return $this->descritivo;
        }

        public function getPreco()
        {
            return $this->preco;
        }

        public function getStatus()
        {
            return $this->status;
        }

        public function setDescritivo($descritivo)
        {
            $this->descritivo = $descritivo;
        }

        public function setPreco($preco)
        {
            $this->preco = $preco;
        }

        public function setStatus($status)
        {
            $this->status = $status;
        }
    }
?>