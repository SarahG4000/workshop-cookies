<?php
include './php/cookies.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop</title>
</head>

<body>
    <div id="app">
        <button id="run">Run</button>

        <input type="text" value="cookievalue" />
        <p><a href="javascript:createCookie('ppkcookie1')" class="page">Créer cookie 1</a><br>
        <a href="javascript:readCookie('ppkcookie1')" class="page">Lire cookie 1</a><br>
        <a href="javascript:eraseCookie('ppkcookie1')" class="page">Supprimer cookie 1</a></p>


        <?php HelloWorld(); ?>
    </div>
    <script src="./javasscript/cookies.js"></script>

</body>

</html>
