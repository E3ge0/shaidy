<!DOCTYPE html>
<html lang="fr">
<?php

include 'inc/bdd.php';

if (isset($_POST['pseudo']) and isset($_POST['password'])) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $req = $bdd->prepare('SELECT * FROM accounts WHERE pseudo = ? AND password = ?');
    $req->execute([$pseudo, sha1($password)]);
    if ($req->rowCount() == 1) {
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        header('Location: dashboard.php');
    } else {
?>
<div class="alert alert-danger">Connexion échouée.</div>
<?php
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shai'dy - Administration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.css">
</head>

<body><br>
    <h2 align="center">Connexion Administrateur</h2>
    <div style="margin: 13%; background-color: grey; padding: 5%; border-radius: 10px" align="center">
        <form method="post">
            <input class="form-control" type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo ..."
                required><br>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="Votre mot de passe ..." required><br><br>
            <input type="submit" class="btn btn-primary" value="Se connecter">
        </form>
    </div>
</body>

</html>