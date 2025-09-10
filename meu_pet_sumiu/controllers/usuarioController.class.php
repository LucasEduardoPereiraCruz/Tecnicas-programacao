<?php
    require_once "models/Conexao.class.php";
    require_once "models/usuarioDAO.class.php";
    require_once "models/usuarios.class.php";
    class usuarioController
    {
        public function login()
        {
            $msg = array("","","");
            $erro = false;
            if($_POST)
            {
                //verificar os dados
                if(empty($_POST["email"]))
                {
                    $msg[0] = "Preencha o e-mail";
                    $erro = true;
                }

                if(empty($_POST["senha"]))
                {
                    $msg[1] = "Preencha a senha";
                    $erro = true;
                }
                
                //verificar no banco de dados se existe esse usuário 
                if(!$erro)
                {
                    $usuario = new Usuarios(email:$_POST["email"]);
                    $usuarioDAO = new usuarioDAO();
                    $retorno = $usuarioDAO->login($usuario);
                    
                    if(is_array($retorno))
                    {
                        if(count($retorno) > 0)
                        {
                            //verificar se a senha corresponde
                            if(password_verify($_POST['senha'], $retorno[0]->senha))
                            {
                                //logar
                                $msg[2] = "Login com sucesso!!";
                            }
                            else
                            {
                                //credenciais erradas
                                $msg[2] = "Verifique os dados digitados";
                            }
                        }
                        else
                        {
                            //credenciais erradas
                            $msg[2] = "Verifique os dados digitados";
                        }
                    }
                }
            }
            //require views formulário
            require_once "views/login.php";
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
                    $usuarioDAO = new usuarioDAO();
                    $retorno = $usuarioDAO->verificar_email($usuario);
                    if(is_array($retorno))
                    {
                        if(count($retorno) > 0)
                        {
                            $msg[1] = "E-mail já está cadastrado";
                            $erro = true;
                        }
                    }
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
                    $usuario = new usuarios(0,$_POST["nome"], $_POST["email"], password_hash($_POST ["senha"], PASSWORD_DEFAULT), $_POST["celular"]);
                    //cadastrar ele no BD
                    $usuarioDAO = new usuarioDAO();
                    $retorno = $usuarioDAO -> inserir($usuario); 
                }
            }
            require_once "views/form_usuario.php";
        }
    } //Fim da classe.
?>