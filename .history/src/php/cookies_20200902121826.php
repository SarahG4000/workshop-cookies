<?php

$utilisateur = $_COOKIE['utilisateur'];
var-dump(unserialize($utilisateur));
die();

// $user = [
//     'prenom' => 'sarah',
//     'nom' => 'guillaume',
//     'age' => 25,
// ];

// setcookie('utilisateur', serialize($user));

// var_dump(serialize($user));
// var_dump(
//     unserialize(
//         'a:3:{s:6:"prenom";s:5:"sarah";s:3:"nom";s:9:"guillaume";s:3:"age";i:25;}'
//     )
// );
// die();

// $nomutilisateur = null;
// if (!empty($_GET['action']) && $_GET['action'] === 'deconnecter') {
//     unset($_COOKIE['nomutilisateur']);
//     setcookie('name', '', time() - 10);
// }
// if (!empty($_COOKIE['name'])) {
//     $nomutilisateur = $_COOKIE['name'];
// }
// if (!empty($_POST['nom'])) {
//     setcookie('name', $_POST['nom']);
// }

// setcookie('name', 'sarah', time() + 60 * 60 * 24);
// var_dump($_COOKIE);

// $hello = 'hello World';

// function HelloWorld()
// {
//     echo '<h1>Hello World</h1>';
// }
//
?>
<?php if ($nomutilisateur): ?>
    <h1>Hello <?= htmlentities($nomutilisateur) ?></h1>
    <a href="index.php?action=deconnecter">Se deconnecter</a>
<?php else: ?>
<form action="" method="post">
<div>
<input name="nom" placeholder="entre votre nom" />
</div>
<button>Se connecter</button>
</form>
<?php endif; ?>
