<?php
    class usuarios 
    {
        public function __construct(private int $id_usuario = 0, private string $nome = "", 
        private string $email = "", private string $senha = "", private string $celular = ""){}

        public function getId_usuario($id_usuario)
        {
            return $this->id_usuario;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function getCelular()
        {
            return $this->celular;
        }


        //SET
        public function setId_usuario($id_usuario)
        {
            return $this->id_usuario = $id_usuario;
        }

        public function setNome($nome)
        {
            return $this->nome = $nome;
        }

        public function setEmail($email)
        {
            return $this->email = $email;
        }

        public function setSenha($senha)
        {
            return $this->senha = $senha;
        }

        public function setCelular($celular)
        {
            return $this->celular = $celular;
        }
    } //Fim da classe
?>