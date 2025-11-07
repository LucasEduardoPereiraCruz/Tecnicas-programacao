<?php
    class Festa 
    {
        public function __construct(private string $data_contrato = "", private string $data_festa = "", private float $valor = 0.00,  private  $cliente = null, private  $contratado = null, private  $decoracao = null){}

        //gets e sets
        public function getDataContrato()
        {
            return $this->data_contrato;
        }

        public function getDataFesta()
        {
            return $this->data_festa;
        }

        public function getValor()
        {
            return $this->valor;
        }

        public function getCliente()
        {
            return $this->cliente;
        }
        
        public function getContratado()
        {
            return $this->contratado;
        }

        public function getDecoracao()
        {
            return $this->decoracao;
        }

        //sets
        public function setDataContrato($data_contrato)
        {
            $this->data_contrato = $data_contrato;
        }

        public function setDataFesta($data_festa)
        {
            $this->data_festa = $data_festa;
        }

        public function setValor($valor)
        {
            $this->valor = $valor;
        }

        public function setCliente($cliente)
        {
            $this->cliente = $cliente;
        }

        public function setContratado($contratado)
        {
            $this->contratado = $contratado;
        }

        public function setDecoracao($decoracao)
        {
            $this->decoracao = $decoracao;
        }


    
    } // fim da classe 
?>