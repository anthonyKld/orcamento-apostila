<?php
// InteracaoUsuario.php

class InteracaoUsuario {
    public function solicitarQuantidadePaginas() {
        echo "<div class='seletor'>";
        echo '<label for="quantidade_paginas">Quantidade de Páginas:</label>';
        echo '<input type="number" id="quantidade_paginas" name="quantidade_paginas" min="1" required>';
        echo "</div>";
    }

    public function solicitarOpcaoCor() {
        echo "<div class='seletor'>";
        echo "<label for='opcaoCor'>Cor da Impressão <span class='requirede'>*</span></label>";
        echo "<select name='opcaoCor' required>";
        echo "<option value='1'>Preto e branco</option>";
        echo "<option value='2'>Colorido</echo option>";
        echo "</select>";
        echo "</div>";
    }

    public function solicitarOpcaoLado() {
        echo "<div class='seletor'>";
        echo "<label for='opcaoLado'>Lado da impressão <span class='requirede'>*</span></label>";
        echo "<select name='opcaoLado' required>";
        echo "<option value='1'>Frente e verso</option>";
        echo "<option value='2'>Soemente frente</echo option>";
        echo "</select>";
        echo "</div>";
    }

    public function solicitarOpcaoMaterial() {
        echo "<div class='seletor'>";
        echo "<label for='opcaoMaterial'>Material para impressão <span class='requirede'>*</span></label>";
        echo "<select name='opcaoMaterial' required>";
        echo "<option value='1'>Papel OFFICET 75g</option>";
        echo "<option value='2'>Papel OFFICET 90g</echo option>";
        echo "</select>";
        echo "</div>";
    }

    public function solicitarOpcaoEncadernacao() {
        echo "<div class='seletor'>";
        echo "<label for='opcaoEncadernacao'>Tipo de encadernação <span class='requirede'>*</span></label>";
        echo "<select name='opcaoEncadernacao' required>";
        echo "<option value='1'>Espiral</option>";
        echo "<option value='2'>Airó</echo option>";
        echo "</select>";
        echo "</div>";
    }

    public function solicitarOpcaoCapaImg() {
        echo "<div class='seletor'>";
        echo "<label for='opcaoCapaImg'>Vai querer enviar imagem da capa <span class='requirede'>*</span></label>";
        echo "<select name='opcaoCapaImg' required>";
        echo "<option value='1'>Sim</option>";
        echo "<option value='2'>Não</echo option>";
        echo "</select>";
        echo "</div>";
        /*
        if($opcaoCapa == 1) {
            echo "Insira a URL da sua capa: ";
            return $urlCapa = readline();
        } 
        return $opcaoCapa;
        */
    }

    public function solicitarOpcaoCapa() {
        echo "<div class='seletor'>";
        echo "<label for='opcaoCapa'>Tipo de capa <span class='requirede'>*</span></label>";
        echo "<select name='opcaoCapa' required>";
        echo "<option value='1'>Transparente</option>";
        echo "<option value='2'>Preto fosco</echo option>";
        echo "<option value='3'>Carbono + adsivo</echo option>";
        echo "</select>";
        echo "</div>";
    }
}
?>
