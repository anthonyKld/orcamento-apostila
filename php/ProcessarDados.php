<?php
    class ProcessarDados {
        public $quantidadePaginas;
        public $opcaoCor;
        public $opcaoLado;
        public $opcaoMaterial;
        public $opcaoEncadernacao;
        public $opcaoCapaImg;
        public $opcaoCapa;
    
        public function __construct() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Coleta os valores dos campos do formulário e os atribui aos atributos da classe
                $this->quantidadePaginas = $_POST["quantidade_paginas"];
                $this->opcaoCor = $_POST["opcaoCor"];
                $this->opcaoLado = $_POST["opcaoLado"];
                $this->opcaoMaterial = $_POST["opcaoMaterial"];
                $this->opcaoEncadernacao = $_POST["opcaoEncadernacao"];
                $this->opcaoCapaImg = $_POST["opcaoCapaImg"];
                $this->opcaoCapa = $_POST["opcaoCapa"];
            }
        }

        public function calcularQtdEncadernacoes($quantidadePaginas) {
            return 2 * $quantidadePaginas;
        }
    }
    
?>
