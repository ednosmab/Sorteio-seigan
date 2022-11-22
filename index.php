<?php
    require_once("versorteio.php");

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="assets/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Sorteio</title>
    </head>
    <body>
        <section id="gif-container" >
            <img id="gif" src="" alt="Sorteio Seigan" onclick="chamaGif()">
        </section>
        <header>
            <h1>Sorteio da Academia Seigan</h1>
        </header>
        <section id="trofeis">
            <div>
                <p id="ganhador1" class="hide"><?= strtoupper($verSorteioGanhador1[0])?></p>
                <span><img id="trofeu1" class="hide" src="assets/img/trofeu.png" alt=""></span>
                <input id="button1" class="buttons buttonStyle" type="button" value="1º SORTEIO" onclick="cacaNiquel('ganhador1', 'trofeu1', 'button1')">
            </div>
            <div>
                <p id="ganhador2" class="hide"><?= strtoupper($verSorteioGanhador2[0])?></p>
                <span><img id="trofeu2" class="hide" src="assets/img/trofeu.png" alt=""></span>
                <input id="button2" class="buttons buttonStyle" type="button" value="2º SORTEIO" onclick="cacaNiquel('ganhador2', 'trofeu2', 'button2')">

            </div>
            <div>
                <p id="ganhador3" class="hide"><?= strtoupper($verSorteioGanhador3[0])?></p>
                <span><img id="trofeu3" class="hide" src="assets/img/trofeu.png" alt=""></span>
                <input id="button3" class="buttons buttonStyle" type="button" value="3º SORTEIO" onclick="cacaNiquel('ganhador3', 'trofeu3', 'button3')">
            </div>
        </section>
        <script src="assets/js/animacao.js"></script>
    </body>
</html>