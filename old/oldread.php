<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shai'Dy</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.css">
    <style>
        p {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php include 'inc/navbar.php';

    if (isset($_GET['i'])) {
        $id = htmlspecialchars($_GET['i']);
        $req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
        $req->execute([$id]);
        if ($req->rowCount() == 1) {
            $article = $req->fetch();
    ?>
            <div align="center"><img style="border-radius: 30px; width: 800px; height: 335px" src="upload/<?php echo $article['image'] ?>" alt=""></div>
            <br>
            <div style="background-color: #5D89F7; margin-left: 15%; margin-right: 15%; border-radius: 30px" align="center"><br>


                <h2 style="width: 75%; border-radius: 30px; padding: 5px; background-color: grey; color: white;">
                    <?php echo $article['titre'] ?></h2>
                <br><br>
                <p>
                    <?php echo $article['content'] ?>
                </p>
            </div>

        <?php
        } else {
        ?>
            <div align="center">
                <h1>Aucun résultat.</h1>
            </div>
    <?php
        }
    }
    ?>

    <script src="inc/burger-menu.js"></script>
</body>

</html>