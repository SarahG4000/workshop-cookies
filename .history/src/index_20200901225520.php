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

        <?php
        $hello = 'hello World';

        function HelloWorld()
        {
            echo '<h1>' . $hello . '</h1>';
        }
        ?>
    </div>
    <script src="./javasscript/cookies.js"></script>

</body>

</html>
