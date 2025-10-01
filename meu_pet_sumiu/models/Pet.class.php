<?php
    class Pet {
        public function __construct(
            private int    $id_pet = 0,
            private string $nome = "",
            private string $idade = "",
            private string $raca = "",
            private string $port = "",
            private string $local = "",
            private string $data = "",
            private string $imagem = "",
            private string $cor_olhos = "",
            private string $cor = "",
            private string $observacoes = "",
            private string $situacao = "",
            private Usuarios $usuario = new Usuarios() ) {} 
    }

    //fazer o get e o set
?>
