<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shai'dy - Administration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<?php
include 'inc/bdd.php';
session_start();
if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
?>
<a href="dashboard.php">
    <div align="center">
        <div align="center" style="background-color: grey; border-radius: 10px; width: 20%; margin: 10px">
            <p style="color: black">Retour Dashboard</p>
        </div>
    </div>
</a>
<?php

    if (isset($_POST['titreet'])) {
        $titre = $_POST['titreet'];
        $desc = $_POST['descet'];
        $lien = $_POST['lienet'];
        $req = $bdd->prepare('UPDATE etudes SET titre = ?, description = ?, lien = ?, date = ? WHERE id = ?');
        $req->execute([$titre, $desc, $lien, date('d/m/Y à H:i:s'), $_GET['idet']]);
    }

    if (isset($_POST['titrepod'])) {
        $titre = $_POST['titrepod'];
        $desc = $_POST['descpod'];
        $lien = $_POST['lienpod'];
        $req = $bdd->prepare('UPDATE podcasts SET titre = ?, description = ?, lien = ?, date = ? WHERE id = ?');
        $req->execute([$titre, $desc, $lien, date('d/m/Y à H:i:s'), $_GET['idpod']]);
    }

    if (isset($_POST['titreapi'])) {
        $titre = $_POST['titreapi'];
        $desc = $_POST['descapi'];
        $lien = $_POST['lienapi'];
        $req = $bdd->prepare('UPDATE api SET titre = ?, description = ?, lien = ?, date = ? WHERE id = ?');
        $req->execute([$titre, $desc, $lien, date('d/m/Y à H:i:s'), $_GET['idapi']]);
    }

    if (isset($_POST['addimpod'])) {
        if (isset($_FILES['filepod'])) {
            $tmpName = $_FILES['filepod']['tmp_name'];
            $name = $_FILES['filepod']['name'];
            $size = $_FILES['filepod']['size'];
            $error = $_FILES['filepod']['error'];
            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
            //Tableau des extensions que l'on accepte
            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
            if (in_array($extension, $extensions) && $error == 0) {
                $uniqueName = uniqid('', true);
                $file = $uniqueName . "." . $extension;
                move_uploaded_file($tmpName, './upload/' . $file);
                $req = $bdd->prepare('UPDATE podcasts SET image = ? WHERE id = ?');
                $req->execute([$file, $_GET['idpod']]);
            }
        }
    }

    if (isset($_POST['content'])) {
        $req = $bdd->prepare('UPDATE articles SET titre = ?, content = ?, date = ?, category = ?, description = ? WHERE id = ?');
        $req->execute([$_POST['titre'], $_POST['content'], date('d/m/Y à H:i:s'), $_POST['cat'], $_POST['desc'], $_GET['id']]);
    ?>
<div class="alert alert-success">Changements pris en compte.</div>
<?php
    }

    if (isset($_POST['ccc'])) {
        if (isset($_FILES['file'])) {
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
            //Tableau des extensions que l'on accepte
            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
            if (in_array($extension, $extensions) && $error == 0) {
                $uniqueName = uniqid('', true);
                $file = $uniqueName . "." . $extension;
                move_uploaded_file($tmpName, './upload/' . $file);
                $req = $bdd->prepare('UPDATE articles SET image = ? WHERE id = ?');
                $req->execute([$file, $_GET['id']]);
            }
        }
    }

    if (isset($_POST['addimet'])) {
        if (isset($_FILES['fileet'])) {
            $tmpName = $_FILES['fileet']['tmp_name'];
            $name = $_FILES['fileet']['name'];
            $size = $_FILES['fileet']['size'];
            $error = $_FILES['fileet']['error'];
            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
            //Tableau des extensions que l'on accepte
            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
            if (in_array($extension, $extensions) && $error == 0) {
                $uniqueName = uniqid('', true);
                $file = $uniqueName . "." . $extension;
                move_uploaded_file($tmpName, './upload/' . $file);
                $req = $bdd->prepare('UPDATE etudes SET image = ? WHERE id = ?');
                $req->execute([$file, $_GET['idet']]);
            }
        }
    }

    if (isset($_POST['addimapi'])) {
        if (isset($_FILES['fileapi'])) {
            $tmpName = $_FILES['fileapi']['tmp_name'];
            $name = $_FILES['fileapi']['name'];
            $size = $_FILES['fileapi']['size'];
            $error = $_FILES['fileapi']['error'];
            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
            //Tableau des extensions que l'on accepte
            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
            if (in_array($extension, $extensions) && $error == 0) {
                $uniqueName = uniqid('', true);
                $file = $uniqueName . "." . $extension;
                move_uploaded_file($tmpName, './upload/' . $file);
                $req = $bdd->prepare('UPDATE api SET image = ? WHERE id = ?');
                $req->execute([$file, $_GET['idapi']]);
            }
        }
    }
    if (isset($_GET['del'])) {
        $name = $_GET['del'];
        $req = $bdd->prepare('UPDATE articles SET image = "" WHERE image = ?');
        $req->execute([$name]);
    }
    if (isset($_GET['delet'])) {
        $name = $_GET['delet'];
        $req = $bdd->prepare('UPDATE etudes SET image = "" WHERE image = ?');
        $req->execute([$name]);
    }
    if (isset($_GET['delpod'])) {
        $name = $_GET['delpod'];
        $req = $bdd->prepare('UPDATE podcasts SET image = "" WHERE image = ?');
        $req->execute([$name]);
    }
    if (isset($_GET['delapi'])) {
        $name = $_GET['delapi'];
        $req = $bdd->prepare('UPDATE api SET image = "" WHERE image = ?');
        $req->execute([$name]);
    }
    if (isset($_GET['id'])) {

        $req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
        $req->execute([$_GET['id']]);

        if ($req->rowCount() != 1) {
            header('Location: dashboard.php');
        }
        $article = $req->fetch();
    ?>


<body>
    <br>
    <h2 align="center">Modification news</h2>
    <div style="margin: 11%">
        <form method="post">
            <label>Titre</label>
            <input class="form-control" type="text" name="titre" id="titre" value="<?php echo $article['titre'] ?>">
            <br>
            <label>Brève description</label>
            <input class="form-control" type="text" name="desc" id="desc" value="<?php echo $article['description'] ?>">
            <br>
            <label>Contenu</label>
            <textarea class="form-control" type="text" name="content"
                id="content"><?php echo $article['content'] ?></textarea>
            <br>
            <label>Catégorie</label>
            <input class="form-control" type="text" name="cat" id="cat" value="<?php echo $article['category'] ?>">

            <br>
            <div align="center">
                <input type="submit" value="Modifier" class="btn btn-warning" style="width: 50%">
            </div><br><br>

        </form>
        <label>Image :</label><br>
        <?php if ($article['image'] !== '') {
                ?>
        <img src="upload/<?php echo $article['image'] ?>" width="400px" height=auto>
        <a href="?id=<?php echo $article['id'] ?>&del=<?php echo $article['image'] ?>"
            style="text-decoration: none; font-size: 50px">🗑️</a>
        <?php
                } else {
                ?>
        <form method="post" enctype="multipart/form-data">
            <div style="display: flex">
                <input class="form-control" type="file" id="file" name="file">
                <input type="text" name="ccc" id="ccc" style="display: none">
                <input type="submit" value="Upload" class="btn btn-success" style="margin-left: 10px">
            </div>
        </form>
        <?php
                } ?>


    </div>

</body>

</html>
<?php
    } elseif (isset($_GET['idet'])) {
        $req = $bdd->prepare('SELECT * FROM etudes WHERE id = ?');
        $req->execute([htmlspecialchars($_GET['idet'])]);
        if ($req->rowCount() == 1) {
            $etude = $req->fetch();

?><br>
<h2 align="center">Modification étude</h1>
    <div style="margin: 9%">
        <form method="post">
            <label>Titre</label>
            <input class="form-control" type="text" name="titreet" id="titreet" value="<?php echo $etude['titre'] ?>">
            <br>
            <br>
            <label>Description</label>
            <input class="form-control" type="text" name="descet" id="descet"
                value="<?php echo $etude['description'] ?>">
            <br>
            <label>Lien</label>
            <input class="form-control" type="text" name="lienet" id="lienet" value="<?php echo $etude['lien'] ?>">

            <br>
            <div align="center">
                <input type="submit" value="Modifier" class="btn btn-warning" style="width: 50%">
            </div><br><br>

        </form>
        <label>Image :</label><br>
        <?php if ($etude['image'] !== '') {
            ?>
        <img src="upload/<?php echo $etude['image'] ?>" width="400px" height=auto>
        <a href="?idet=<?php echo $etude['id'] ?>&delet=<?php echo $etude['image'] ?>"
            style="text-decoration: none; font-size: 50px">🗑️</a>
        <?php
            } else {
            ?>
        <form method="post" enctype="multipart/form-data">
            <div style="display: flex">
                <input class="form-control" type="file" id="fileet" name="fileet">
                <input type="text" name="addimet" id="addimet" style="display: none">
                <input type="submit" value="Upload" class="btn btn-success" style="margin-left: 10px">
            </div>
        </form>
        <?php
            } ?>


    </div>
    <?php

        } else {
            header('Location: dashboard.php');
        }
    } elseif (isset($_GET['idpod'])) {
        $req = $bdd->prepare('SELECT * FROM podcasts WHERE id = ?');
        $req->execute([htmlspecialchars($_GET['idpod'])]);
        if ($req->rowCount() == 1) {
            $podcast = $req->fetch();

    ?><br>
    <h2 align="center">Modification podcast</h1>
        <div style="margin: 9%">
            <form method="post">
                <label>Titre</label>
                <input class="form-control" type="text" name="titrepod" id="titrepod"
                    value="<?php echo $podcast['titre'] ?>">
                <br>
                <br>
                <label>Description</label>
                <input class="form-control" type="text" name="descpod" id="descpod"
                    value="<?php echo $podcast['description'] ?>">
                <br>
                <label>Lien</label>
                <input class="form-control" type="text" name="lienpod" id="lienpod"
                    value="<?php echo $podcast['lien'] ?>">

                <br>
                <div align="center">
                    <input type="submit" value="Modifier" class="btn btn-warning" style="width: 50%">
                </div><br><br>

            </form>
            <label>Image :</label><br>
            <?php if ($podcast['image'] !== '') {
                ?>
            <img src="upload/<?php echo $podcast['image'] ?>" width="400px" height=auto>
            <a href="?idpod=<?php echo $podcast['id'] ?>&delpod=<?php echo $podcast['image'] ?>"
                style="text-decoration: none; font-size: 50px">🗑️</a>
            <?php
                } else {
                ?>
            <form method="post" enctype="multipart/form-data">
                <div style="display: flex">
                    <input class="form-control" type="file" id="filepod" name="filepod">
                    <input type="text" name="addimpod" id="addimpod" style="display: none">
                    <input type="submit" value="Upload" class="btn btn-success" style="margin-left: 10px">
                </div>
            </form>
            <?php
                } ?>


        </div>
        <?php
        } else {
            header('Location: dashboard.php');
        }
    } elseif (isset($_GET['idapi'])) {
        $req = $bdd->prepare('SELECT * FROM api WHERE id = ?');
        $req->execute([htmlspecialchars($_GET['idapi'])]);
        if ($req->rowCount() == 1) {
            $api = $req->fetch();

        ?><br>
        <h2 align="center">Modification API</h1>
            <div style="margin: 9%">
                <form method="post">
                    <label>Titre</label>
                    <input class="form-control" type="text" name="titreapi" id="titreapi"
                        value="<?php echo $api['titre'] ?>">
                    <br>
                    <br>
                    <label>Description</label>
                    <input class="form-control" type="text" name="descapi" id="descapi"
                        value="<?php echo $api['description'] ?>">
                    <br>
                    <label>Lien</label>
                    <input class="form-control" type="text" name="lienapi" id="lienapi"
                        value="<?php echo $api['lien'] ?>">

                    <br>
                    <div align="center">
                        <input type="submit" value="Modifier" class="btn btn-warning" style="width: 50%">
                    </div><br><br>

                </form>
                <label>Image :</label><br>
                <?php if ($api['image'] !== '') {
                    ?>
                <img src="upload/<?php echo $api['image'] ?>" width="400px" height=auto>
                <a href="?idapi=<?php echo $api['id'] ?>&delapi=<?php echo $api['image'] ?>"
                    style="text-decoration: none; font-size: 50px">🗑️</a>
                <?php
                    } else {
                    ?>
                <form method="post" enctype="multipart/form-data">
                    <div style="display: flex">
                        <input class="form-control" type="file" id="fileapi" name="fileapi">
                        <input type="text" name="addimapi" id="addimapi" style="display: none">
                        <input type="submit" value="Upload" class="btn btn-success" style="margin-left: 10px">
                    </div>
                </form>
                <?php
                    } ?>


            </div>
            <?php
        } else {
            header('Location: dashboard.php');
        }
    } else {
        header('Location: dashboard.php');
    }
} else {
    header('Location: index.php');
}