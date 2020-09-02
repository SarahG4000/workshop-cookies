<?php
$age = null;
if (!empty($_COOKIE['birthday'])) {
    $birthday = (int) $_COOKIE['birthday'];
    $age = (int) date('Y') - $birthday;
}

if (!empty($_POST['birthday'])) {
    setcookie('birthday', $_POST['birthday']);
}
?>

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

