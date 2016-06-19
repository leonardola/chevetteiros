<?php
    include "header.html";
?>

<link rel="stylesheet" type="text/css" href="css/contact.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="css/keyboard.css">


<script type="text/javascript" src="js/vendors/jquery.keyboard.js"></script>
<script type="text/javascript" src="js/vendors/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/vendors/jquery.keyboard.extension-typing.js"></script>
<script type="text/javascript" src="js/vendors/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/keyboard.js"></script>

<body>
    <div class="margin">
        <form>

            <h1>Contato</h1>
            <!--<p>
                Entre em contato conosco para mais informações.
                chevasctba@yahoo.com.br
            </p>-->

            <div>
                <input class="keyboard" name="name" placeholder="Nome *" type="text">
                <img class="icon" src="https://mottie.github.io/Keyboard/docs/css/images/keyboard.png" />
            </div>
            <div>
                <input class="keyboard" name="email" placeholder="Email *">
                <img class="icon" src="https://mottie.github.io/Keyboard/docs/css/images/keyboard.png" />
            </div>
            <div>
                <textarea class="keyboard" cols="20" rows="5" placeholder="Escreva aqui sua mensagem *"></textarea>
                <img class="icon" src="https://mottie.github.io/Keyboard/docs/css/images/keyboard.png" />
            </div>
            <input type="submit">
        </form>
    </div>

</body>
<!--

<div class="container-fluid">
    <div class="text-center">
        <h1>Contato</h1>
        <p>
            Entre em contato conosco para mais informações.
            chevasctba@yahoo.com.br
        </p>
    </div>

    <form class="form-horizontal" role="form">
        <div class="row row-centered">
            <div class="col-sm-6 col-lg-6 col-centered">
                <div class="form-group">
                    <input type="nome" class="keyboard form-control" name="name" placeholder="Nome *" type="text">
                    <img class="icon" src="https://mottie.github.io/Keyboard/docs/css/images/keyboard.png" />
                </div>
            </div>
        </div>
        <div class="row row-centered">
            <div class="col-sm-6 col-lg-6 col-centered">
                <div class="form-group">
                    <input type="nome" class="keyboard form-control" name="name" placeholder="Nome *" type="text">
                    <img class="icon" src="https://mottie.github.io/Keyboard/docs/css/images/keyboard.png" />
                </div>
            </div>
        </div>
    </form>
</div>-->