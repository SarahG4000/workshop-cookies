<?php
if (!empty($_POST['nom'])) {
    setcookie('name', $_POST['nom']);
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

<from action="" mothod="post">
<div>
<input name="nom" placeholder="entre votre nom" />
</div>
<button>Se connecter</button>
</from>
