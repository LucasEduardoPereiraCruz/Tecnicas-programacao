<?php
    class Prestador extends Pessoa // Criando relação com o pai (herança)
    {
        public function __construct(private string $especialidade = "",  private array $itens = [], private array $prestador = array(), string $nome = "", string $celular = "", ) ///Não vai private, protected... o máximo que podemos é tipar ela (string $nome)
        {
            parent:: __construct($nome, $celular); // Relação
        }

        //gets 
        
        public function getEspecialidade()
        {
            return $this->especialidade;
        }

        public function getItens()
        {
            return $this->itens;
        }


        //sets

        public function setEspecialidade($especialidade)
        {
            $this->especialidade = $especialidade;
        }

        public function setItens($itens)
        {
            $this->itens[] = $itens;
        }
    } // fim da classe 
?>