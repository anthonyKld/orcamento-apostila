<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <<?php 
        require_once 'php/InteracaoUsuario.php';
        require_once 'php/Orcamento.php';
        require_once 'php/ProcessarDados.php';
        $interacao = new InteracaoUsuario();
        $orcamento = new Orcamento();
    ?>
    <div class="conteiner">
        <h1>ORÇAMENTO AUTOMÁTICO DE APOSTILA</h1>
        <form action="php/ProcessarDados.php" method="post">
            <?php
                $interacao->solicitarQuantidadePaginas();
                $interacao->solicitarOpcaoCor();
                $interacao->solicitarOpcaoLado();
                $interacao->solicitarOpcaoMaterial();
                $interacao->solicitarOpcaoEncadernacao();
                $interacao->solicitarOpcaoCapaImg();
                $interacao->solicitarOpcaoCapa();
            ?>
            <input class="btn-calcular" type="submit" value="Calcular Orçamento">
        </form>
        <<?php 
            $orcamento->exibirOrcamento()
        ?>
    </div>
</body>
</html>