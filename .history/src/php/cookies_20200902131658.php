<?php
$age = null;

if (!empty($_POST['birthday'])) {
    setcookie('birthday', $_POST['birthday']);
}

if (!empty($_COOKIE['birthday'])) {
    $birthday = (int) $_COOKIE['birthday'];
    $age = (int) date('Y') - $birthday;
}
?>

<?php if ($age && $age >= 18): ?>
    <h1>contenue pour les adultes</h1>
<?php else: ?>

<form action="" method="post">
<label for="birthday">entre votre date de naissance</label>
    <div>
        <select name="birthday">
        <?php for ($i = 2020; $i > 1919; $i--): ?>
        <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor; ?>
        </select>
        <button type="submit">send</button>
    </div>
</form>
        <?php endif; ?>

