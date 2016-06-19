<?php

    include "header.html";

?>
<link rel="stylesheet" type="text/css" href="css/home.css">

    <div class="firstBannerWrapper">
        <div class="firstBanner cycle-slideshow">
            <div class="overlay cycle-overlay"></div>
            <img src="images/banner1.png"
                 data-cycle-desc="A Chevrolet não faria só mais um carrinho <br> (Chevrolet, 1973)">
            <img src="images/banner2.png"
                 data-cycle-desc="Chevette. Vencedor de ponta a ponta <br> (Chevrolet, 1973)">
            <img src="images/banner3.png"
                 data-cycle-desc="Chevette. Você tem toda razão de ter um <br> (Chevrolet, 1973)">
        </div>
    </div>

    <div class="secondBanner">

        <a href="#">
            <div class="smallBanner">
                <img src="images/fotos.png">
                <span>GALERIA</span>
            </div>
        </a>

        <a href="#">
            <div class="smallBanner">
                <img src="images/preparacoes.png">
                <span>PREPARAÇÃO</span>
            </div>
        </a>

        <a href="#">
            <div class="smallBanner">
                <img src="images/bandeira.png">
                <span class="text">EVENTOS</span>
            </div>
        </a>
    </div>

    <div class="thirdBanner">

        <a href="#">
            <div class="smallBanner">
                <img src="images/balao1.png">
            </div>
        </a>

        <a href="#">
            <div class="smallBanner">
                <img src="images/balao2.png">
            </div>
        </a>

        <a href="#">
            <div class="smallBanner">
                <img src="images/balao3.png">
            </div>
        </a>
    </div>


<?php
    include "sponsors.html";
    /*include "siteMap.html";*/

?>