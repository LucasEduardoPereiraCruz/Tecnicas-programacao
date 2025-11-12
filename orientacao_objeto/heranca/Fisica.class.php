<?php
    final class Fisica extends Pessoa
    {
        public function __construct(private string $cpf = "", string $nome="", string $celular="", string $endereco="")
        {
            parent:: __construct($nome, $celular, $endereco);
        }

        public function getCpf()
        {
            return $this->cpf;
        }
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }
        public function validarCPF($cpf)
        {
            echo "Validar CPF";
        }

        public function inserir()
        {
            echo "Inserir CPF";
        }

        public function alterar()
        {
            echo "Alterar CPF";
        }
    }
?>