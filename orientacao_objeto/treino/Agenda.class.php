<?php
    class Agenda 
    {
        public function __construct(private string $data = "", private array $itens = [], private $cliente = null, string $horario = "", string $status = "", Servico $servico = null, string $agenda = null, Prestador $prestador = null)
        {
            $this->itens[] = new Itens ($horario, $status, $servico, $agenda, $prestador);
        }

        public function getData()
        {
            return $this->data;
        }

        public function getCliente()
        {
            return $this->cliente;
        }

        public function getItens()
        {
            return $this->itens;
        }

        public function setData($data)
        {
            $this->data = $data;
        }

        public function setCliente($cliente)
        {
            $this->cliente = $cliente;
        }

        public function setItens($horario, $status, $servico, $agenda, $prestador)
        {
            $this->itens[] = new Itens ($horario, $status, $servico, $agenda, $prestador);
        }
    }
?>