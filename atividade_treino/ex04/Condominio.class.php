<?php
    class Condominio 
    {
        public function __construct(private string $data_geracao = "", private float $valor_final = 0.0, private string $data_pagamento = "", private array $loja = []){}

        public function getDataGeracao()
        {
            return $this -> data_geracao;
        }

        public function getValorFinal()
        {
            return $this -> valor_final;
        }

        public function getDataPagamento()
        {
            return $this -> data_pagamento;
        }

        public function getLojas()
        {
            return $this -> loja;
        }

        public function setDataGeracao($data_geracao)
        {
            $this->data_geracao = $data_geracao;
        }

        public function setValorFinal($valor_final)
        {
            $this->valor_final = $valor_final;
        }

        public function setDataPagamento($data_pagamento)
        {
            $this->data_pagamento = $data_pagamento;
        }

        public function setLoja($loja)
        {
            $this->loja[] = $loja;
        }
    } // Fim da classe 
?>
