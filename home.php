<?php

    include "header.html";

?>
<link rel="stylesheet" type="text/css" href="css/home.css">

    <div class="firstBannerWrapper">
        <div class="firstBanner cycle-slideshow">
            <div class="overlay cycle-overlay">
                <div></div>
                <div>A Chevrolet não faria só mais um carrinho <br> (Chevrolet, 1973)</div>
            </div>
            <img src="images/banner1.png" alt="Campanha publicitaria"
                 data-cycle-desc="A Chevrolet não faria só mais um carrinho <br> (Chevrolet, 1973)">
            <img src="images/banner2.png" alt="Chevete Azul"
                 data-cycle-desc="Chevette. Vencedor de ponta a ponta <br> (Chevrolet, 1973)">
            <img src="images/banner3.png" alt="Varios chevettes"
                 data-cycle-desc="Chevette. Você tem toda razão de ter um <br> (Chevrolet, 1973)">
        </div>
    </div>

    <div class="secondBanner">

        <a href="#">
            <div class="smallBanner">
                <img src="images/fotos.png" align="Galeria de fotos">
                <span>GALERIA</span>
            </div>
        </a>

        <a href="#">
            <div class="smallBanner">
                <img src="images/preparacoes.png" alt="Pagina de preparações">
                <span>PREPARAÇÃO</span>
            </div>
        </a>

        <a href="#">
            <div class="smallBanner">
                <img src="images/bandeira.png" alt="Pagina de eventos">
                <span class="text">EVENTOS</span>
            </div>
        </a>
    </div>

    <div class="thirdBanner">

        <a href="#">
            <div class="smallBanner">
                <img src="images/balao1.png" alt="Pagina de downloads">
            </div>
        </a>

        <a href="#">
            <div class="smallBanner">
                <img src="images/balao2.png" alt="Eventos semanais">
            </div>
        </a>

        <a href="#">
            <div class="smallBanner">
                <img src="images/balao3.png" alt="Fórum de discuções">
            </div>
        </a>
    </div>


<?php
    include "sponsors.html";
    include "siteMap.html";

?>