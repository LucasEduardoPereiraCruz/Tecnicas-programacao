<?php
    require_once "models/usuarios.class.php";
    class usuarioController
    {
        public function login()
        {
            //require views formulário
            if($_POST)
            {
                //verificar os dados
                //verificar no banco de dados se existe esse usuário 
            }
        } //fim do login
        public function inserir()
        {
            $msg = array("", "", "", "");
            $erro = false;
            if($_POST)
            {
                if(empty($_POST["nome"]))
                {
                    $msg[0] = "Preencha o nome";
                    $erro = true;
                }

                if(empty($_POST["email"]))
                {
                    $msg[1] = "Preencha o email";
                    $erro = true;
                }
                else
                {
                    //verifica se já não tem um usuário com esse email cadastrado
                    $usuario = new usuarios(email: $_POST["email"]);
                }

                if(empty($_POST["senha"]))
                {
                    $msg[2] = "Preencha a senha";
                    $erro = true;
                }

                if(empty($_POST["celular"]))
                {
                    $msg[3] = "Preencha o celular";
                    $erro = true;
                }
                if(!$erro)
                {
                    $usuario = new usuarios(0,$_POST["nome"], $_POST["email"], $_POST["senha"], $_POST["celular"]);
                    //cadastrar ele no BD
                }
            }
            require_once "views/form_usuario.php";
        }
    } //fim
?>