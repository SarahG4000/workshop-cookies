<?php
$nomutilisateur = null;
if (!empty($_GET['action']) && $_GET['action'] === 'deconnecter') {
    unset($_COOKIE['nomutilisateur']);
    setcookie('nomutilisateur', '', time() - 10);
}
if (!empty($_COOKIE['name'])) {
    $nomutilisateur = $_COOKIE['name'];
}
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
