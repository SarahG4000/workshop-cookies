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
        <p>
        <button href="javascript:createCookie('cookietest1')" class="page">Créer cookie 1</button><br>
        <button href="javascript:readCookie('cookietest1')" class="page">Lire cookie 1</button><br>
        <button href="javascript:eraseCookie('cookietest1')" class="page">Supprimer cookie 1</button>
        </p>


        <?php HelloWorld(); ?>
    </div>
    <script src="./javasscript/cookies.js"></script>

</body>

</html>
