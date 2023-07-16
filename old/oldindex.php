<!DOCTYPE html>
<html lang="fr">
<?php
if (isset($_GET['query'])) {
    header('Location: news.php?query=' . $_GET['query']);
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shai'dy</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.css">
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        .transparent-table tbody,
        .transparent-table tr,
        .transparent-table th,
        .transparent-table td {
            background-color: transparent !important;
        }
    </style>
</head>

<body>
    <?php include 'inc/navbar.php' ?>
    <div style="height: 600px;">

        <div id="cim" class="carousel slide carousel-fade" data-ride="carousel" style="box-shadow: 5px 2px 2px black;">

            <!-- Carrousel -->
            <div class="carousel-inner">
                <?php
                $req = $bdd->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 1');
                $req->execute([]);
                $article = $req->fetch();
                ?>
                <div class="carousel-item active" data-interval="5000" align="center">
                    <img style="
    width: 100%;
    background-size: contain;
    background-repeat: no-repeat;
" src="<?php echo 'upload/' . $article['image'] ?>" alt="" class="d-block">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="read.php?i=<?php echo $article['id'] ?>">
                            <h3 style="padding: 10px; background-color: grey; border-radius: 10px">
                                <?php echo $article['titre'] ?></h3>
                        </a>
                    </div>
                </div>
                <?php
                $req = $bdd->prepare('SELECT * FROM articles WHERE id < (SELECT MAX(id) FROM articles) ORDER BY id DESC limit 4');
                $req->execute([]);
                $articles = $req->fetchAll();
                foreach ($articles as $a) {
                ?>
                    <div class="carousel-item" data-interval="5000" align="center">
                        <img style="
    width: 100%;
    background-size: contain;
    background-repeat: no-repeat;
" src="<?php echo 'upload/' . $a['image'] ?>" alt="" class="d-block">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="read.php?i=<?php echo $a['id'] ?>">
                                <h3 style="padding: 10px; background-color: grey; border-radius: 10px">
                                    <?php echo $a['titre'] ?></h3>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <br><br><br>

    <div align="center">
        <form method="get" style="display: flex; justify-content: center">
            <input type="text" name="query" id="query" placeholder="Que souhaitez vous rechercher ?" class="form-control" style="width: 40%; margin-right: 20px" required>
            <input type="submit" value="Rechercher" class="btn btn-primary">
        </form>
    </div>
    <script type="text/javascript" src="inc/burger-menu.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>

</body>

</html>