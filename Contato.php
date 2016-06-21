<?php
    include "header.html";
?>

    <title>Contato | Chevetteiros Curitiba</title>

<link rel="stylesheet" type="text/css" href="css/contact.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="css/keyboard.css">


<script type="text/javascript" src="js/vendors/jquery.keyboard.js"></script>
<script type="text/javascript" src="js/vendors/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/vendors/jquery.keyboard.extension-typing.js"></script>
<script type="text/javascript" src="js/vendors/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/keyboard.js"></script>

<body>
    <div class="headerSeparator"></div>
    <div class="margin row">
        <form>

            <h1>Contato</h1>
            <p>
                Entre em contato conosco para mais informações.<br>
                chevasctba@yahoo.com.br
            </p>

            <div>
                <input class="keyboard" name="name" placeholder="Nome *" type="text">
                <img class="icon" alt="Teclado Virtual" src="https://mottie.github.io/Keyboard/docs/css/images/keyboard.png" />
            </div>
            <div>
                <input class="keyboard" name="email" placeholder="Email *">
                <img class="icon" alt="Teclado Virtual" src="https://mottie.github.io/Keyboard/docs/css/images/keyboard.png" />
            </div>
            <div>
                <textarea class="keyboard" cols="20" rows="5" placeholder="Escreva aqui sua mensagem *"></textarea>
                <img class="icon" alt="Teclado Virtual" src="https://mottie.github.io/Keyboard/docs/css/images/keyboard.png" />
            </div>
            <input type="submit">
        </form>
    </div>

</body>


<?php
    include "siteMap.html";