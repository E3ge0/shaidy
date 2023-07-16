<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        .column {
            width: 31%;
            float: left;
            padding: 10px;
            box-sizing: border-box;
        }

        .column:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <?php include 'inc/navbar.php'; ?>
    <?php
    if (isset($_GET['cat'])) {
        $cat = htmlspecialchars($_GET['cat']);
        $req = $bdd->prepare('SELECT * FROM articles WHERE category = ?');
        $req->execute([$cat]);
        if ($req->rowCount() > 0) {
            $articles = $req->fetchAll();
            foreach ($articles as $a) {
                echo '<a href="read.php?i=' . $a['id'] . '">';
                echo '<div class="column" align="center" style="background-color: grey; margin: 10px; transition: transform 0.3s">';
                echo '<h2 style="color: black">' . $a['titre'] . '</h2>';
                echo '<p>' . $a['category'] . '</p>';
                echo '</div>';
                echo '</a>';
            }
        } else {
    ?>
            <h2 align="center">Aucun résultat.</h2>
        <?php
        }
    } elseif (isset($_GET['query'])) {
        $q = $_GET['query'];
        $q = '%' . $q . '%';
        $req = $bdd->prepare('SELECT * FROM articles WHERE titre LIKE ?');
        $req->execute([$q]);
        if ($req->rowCount() == 0) {
        ?>
            <h2 align="center">Aucun résultat.</h2>
        <?php
        } else {
            $articles = $req->fetchAll();
            foreach ($articles as $a) {
                echo '<a href="read.php?i=' . $a['id'] . '">';
                echo '<div class="column" align="center" style="background-color: grey; margin: 10px; transition: transform 0.3s">';
                echo '<h2 style="color: black">' . $a['titre'] . '</h2>';
                echo '<p>' . $a['category'] . '</p>';
                echo '</div>';
                echo '</a>';
            }
        }
    } else {
        ?><h1 align="center">Liste des articles</h1>
        <br>
    <?php
        $req = $bdd->prepare('SELECT * FROM articles');
        $req->execute([]);
        $articles = $req->fetchAll();
        foreach ($articles as $a) {
            echo '<a href="read.php?i=' . $a['id'] . '">';
            echo '<div class="column" align="center" style="background-color: grey; margin: 10px; transition: transform 0.3s">';
            echo '<h2 style="color: black">' . $a['titre'] . '</h2>';
            echo '<p>' . $a['category'] . '</p>';
            echo '</div>';
            echo '</a>';
        }
    }

    ?>

    <script src="inc/burger-menu.js"></script>
</body>

</html>