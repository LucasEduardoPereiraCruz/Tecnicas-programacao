<?php
    class Pet {
        public function __construct(
            private int    $id_pet = 0,
            private string $nome = "",
            private string $idade = "",
            private string $raca = "",
            private string $porte = "",
            private string $local = "",
            private string $data = "",
            private string $imagem = "",
            private string $cor_olhos = "",
            private string $cor = "",
            private string $observacoes = "",
            private string $situacao = "",
            private Usuarios $usuario = new Usuarios() ) {} 

            public function getId_pet()
        {
            return $this->id_pet;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function getRaca()
        {
            return $this->raca;
        }

        public function getLocal()
        {
            return $this->local;
        }

        public function getData()
        {
            return $this->data;
        }

        public function getImagem()
        {
            return $this->imagem;
        }

        public function getCorOlhos()
        {
            return $this->cor_olhos;
        }

        public function getCor()
        {
            return $this->cor;
        }

        public function getObservacoes()
        {
            return $this->observacoes;
        }

        public function getSituacao()
        {
            return $this->situacao;
        }

        public function getUsuario()
        {
            return $this->usuario;
        }


        //SET
        public function setId_pet($id_pet)
        {
            return $this->id_pet = $id_pet;
        }

        public function setNome($nome)
        {
            return $this->nome = $nome;
        }

       public function setIdade($idade)
        {
            return $this->idade = $idade;
        }


        public function setRaca($raca)
        {
            return $this->raca = $raca;
        }


        public function setLocal($local)
        {
            return $this->local = $local;
        }


        public function setData($data)
        {
            return $this->data = $data;
        }


        public function setImagem($imagem)
        {
            return $this->imagem = $imagem;
        }


        public function setCorOlhos($cor_olhos)
        {
            return $this->cor_olhos = $cor_olhos;
        }


        public function setCor($cor)
        {
            return $this->cor = $cor;
        }


        public function setObservacoes($observacoes)
        {
            return $this->observacoes = $observacoes;
        }


        public function setSituacao($situacao)
        {
            return $this->situacao = $situacao;
        }


        public function setUsuario($usuario)
        {
            return $this->usuario = $usuario;
        }

    }

    //fazer o get e o set - feito!! 
    
?>
