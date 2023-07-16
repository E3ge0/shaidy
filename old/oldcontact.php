<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/btn.css">
    <style>
    a {
        text-decoration: none;
        color: white;
    }
    </style>
</head>

<body>
    <?php include 'inc/navbar.php' ?>
    <div align="center"><br>
        <h1>Nous contacter</h1>
        <br>
        <?php
        include 'inc/bdd.php';
        if (isset($_POST['text']) and $_POST['text'] != "") {
            $text = htmlspecialchars($_POST['text']);
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $req = $bdd->prepare('SELECT * FROM contact WHERE content = ?');
            $req->execute([$text]);
            if ($req->rowCount() == 0) {
                $req = $bdd->prepare('INSERT INTO contact SET name = ?, email = ?, content = ?');
                $req->execute([$name, $email, $text]);
        ?>
        <div class="alert alert-success">Votre message a bien été envoyé !</div>
        <?php
            } else {
            ?>
        <div class="alert alert-danger">Un message similaire a déjà été envoyé.</div>
        <?php
            }
        }
        ?>
    </div>
    <div style="margin-top: 5%; margin-right: 20%; margin-left: 20%">
        <form method='post'>
            <h3>Vos coordonnées</h3>
            <div style="display: flex; background-color: grey; padding: 10px; border-radius: 10px">
                <input type="text" class="form-control" name="name" id="name" placeholder="Un nom ? (facultatif)"
                    style="margin-right: 60px">
                <input type="email" class="form-control" name="email" id="email"
                    placeholder="Une adresse mail ? (facultatif)">
            </div><br>
            <h3>Votre message</h3>
            <div style="display: flex; background-color: grey; padding: 10px; border-radius: 10px">
                <input type="text" class="form-control" name="text" id="text" placeholder="Dites nous tout !" required>
            </div><br><br>
            <div align="center">
                <input type="submit" class="btn btn-primary" value="Envoyer" style="width: 50%; height: 50px">
            </div>
        </form>
    </div>

    <script src="inc/burger-menu.js"></script>
    <script src="inc/btn.js"></script>
</body>

</html>