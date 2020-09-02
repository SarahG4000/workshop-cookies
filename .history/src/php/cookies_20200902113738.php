<?php
if (!empty($_POST['nom'])) {
    setcookie('name', $_POST['nom'], time() + 60 * 60 * 24);
}
// setcookie('name', 'sarah', time() + 60 * 60 * 24);
// var_dump($_COOKIE);

// $hello = 'hello World';

// function HelloWorld()
// {
//     echo '<h1>Hello World</h1>';
// }
//
?>

<from action="" method="post">
<div>
<input name="nom" placeholder="entre votre nom" />
</div>
<button type="submit">Se connecter</button>
</from>
