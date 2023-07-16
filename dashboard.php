<?php
session_start();
if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
    include 'inc/bdd.php';

    if (isset($_GET['delcont'])) {
        $id = $_GET['delcont'];
        $req = $bdd->prepare('DELETE FROM contact WHERE id = ?');
        $req->execute([$id]);
        header('Location: dashboard.php');
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        $req = $bdd->prepare('DELETE FROM articles WHERE id = ?');
        $req->execute([$id]);
        header('Location: dashboard.php');
    }

    if (isset($_POST['titretude'])) {
        $titre = $_POST['titretude'];
        $lien = $_POST['lienetude'];
        $desc = $_POST['descetude'];
        if (isset($_FILES['fileetude'])) {
            $tmpName = $_FILES['fileetude']['tmp_name'];
            $name = $_FILES['fileetude']['name'];
            $size = $_FILES['fileetudee']['size'];
            $error = $_FILES['fileetude']['error'];
            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
            //Tableau des extensions que l'on accepte
            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
            if (in_array($extension, $extensions) && $error == 0) {
                $uniqueName = uniqid('', true);
                $file = $uniqueName . "." . $extension;
                move_uploaded_file($tmpName, './upload/' . $file);
            }
        }
        $req = $bdd->prepare('INSERT INTO etudes SET titre = ?, description = ?, image = ?, lien = ?, date = ?');
        $req->execute([$titre, $desc, $file, $lien, date('d/m/Y à H:i:s')]);
        header('Location: dashboard.php');
    }

    if (isset($_POST['nomapi'])) {
        $titre = $_POST['nomapi'];
        $lien = $_POST['lienapi'];
        $desc = $_POST['descapi'];
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
            }
        }
        $req = $bdd->prepare('INSERT INTO api SET titre = ?, description = ?, image = ?, lien = ?, date = ?');
        $req->execute([$titre, $desc, $file, $lien, date('d/m/Y à H:i:s')]);
        header('Location: dashboard.php');
    }

    if (isset($_POST['titrepod'])) {
        $titre = $_POST['titrepod'];
        $lien = $_POST['lienpod'];
        $desc = $_POST['descpod'];
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
            }
        }
        $req = $bdd->prepare('INSERT INTO podcasts SET titre = ?, description = ?, image = ?, lien = ?, date = ?');
        $req->execute([$titre, $desc, $file, $lien, date('d/m/Y à H:i:s')]);
        header('Location: dashboard.php');
    }

    if (isset($_POST['content'])) {

        $titre = $_POST['titre'];
        $content = $_POST['content'];
        $cat = $_POST['cat'];
        $file = '';
        $desc = $_POST['desc'];
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
            }
        }
        $req = $bdd->prepare('INSERT INTO articles SET titre = ?, content = ?, image = ?, date = ?, description = ?, category = ?');
        $req->execute([$titre, $content, $file, date('d/m/Y à H:i:s'), $desc, $cat]);
        header('Location: dashboard.php');
    }
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shai'dy</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>

    <body>
        <br><br>
        <div align="center" style="margin-right: 4%; margin-left: 4%">
            <div class="row">
                <a href="index.php">
                    <div align="center">
                        <div align="center" style="background-color: grey; border-radius: 10px; width: 20%; margin: 10px">
                            <p style="color: black">Acceuil</p>
                        </div>
                    </div>
                </a><br>
                <div class="col-sm">
                    <h2>Liste des news en ligne</h2><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Catégorie</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $req = $bdd->prepare('SELECT * FROM articles');
                            $req->execute();
                            $articles = $req->fetchAll();
                            foreach ($articles as $a) {
                            ?>
                                <tr>
                                    <td><?php echo $a['id'] ?></td>
                                    <td><b><?php echo $a['titre'] ?></b></td>
                                    <td><?php echo $a['description'] ?></td>
                                    <td><?php echo $a['category'] ?></td>
                                    <td><?php echo $a['date'] ?></td>
                                    <td><a href="modify.php?id=<?php echo $a['id'] ?>" style="text-decoration: none;">✏️</a> <a href="?del=<?php echo $a['id'] ?>" style="text-decoration: none;">🗑️</a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                    <h2>Liste des études en ligne</h2><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Lien</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $req = $bdd->prepare('SELECT * FROM etudes');
                            $req->execute();
                            $articles = $req->fetchAll();
                            foreach ($articles as $a) {
                            ?>
                                <tr>
                                    <td><?php echo $a['id'] ?></td>
                                    <td><b><?php echo $a['titre'] ?></b></td>
                                    <td><?php echo $a['description'] ?></td>
                                    <td><?php echo $a['lien'] ?></td>
                                    <td><?php echo $a['date'] ?></td>
                                    <td><a href="modify.php?idet=<?php echo $a['id'] ?>" style="text-decoration: none;">✏️</a>
                                        <a href="?delet=<?php echo $a['id'] ?>" style="text-decoration: none;">🗑️</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                    <h2>Liste des API en ligne</h2><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Description</th>
                                <th scope="col">Lien</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $req = $bdd->prepare('SELECT * FROM api');
                            $req->execute();
                            $articles = $req->fetchAll();
                            foreach ($articles as $a) {
                            ?>
                                <tr>
                                    <td><?php echo $a['id'] ?></td>
                                    <td><b><?php echo $a['titre'] ?></b></td>
                                    <td><?php echo $a['description'] ?></td>
                                    <td><?php echo $a['lien'] ?></td>
                                    <td><?php echo $a['date'] ?></td>
                                    <td><a href="modify.php?idapi=<?php echo $a['id'] ?>" style="text-decoration: none;">✏️</a>
                                        <a href="?delapi=<?php echo $a['id'] ?>" style="text-decoration: none;">🗑️</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                    <h2>Liste des podcasts en ligne</h2><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Lien</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $req = $bdd->prepare('SELECT * FROM podcasts');
                            $req->execute();
                            $articles = $req->fetchAll();
                            foreach ($articles as $a) {
                            ?>
                                <tr>
                                    <td><?php echo $a['id'] ?></td>
                                    <td><b><?php echo $a['titre'] ?></b></td>
                                    <td><?php echo $a['description'] ?></td>
                                    <td><?php echo $a['lien'] ?></td>
                                    <td><?php echo $a['date'] ?></td>
                                    <td><a href="modify.php?idpod=<?php echo $a['id'] ?>" style="text-decoration: none;">✏️</a>
                                        <a href="?delpod=<?php echo $a['id'] ?>" style="text-decoration: none;">🗑️</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <h2>Ajouter une nouvelle news</h2><br>
                    <div style="margin-left: 3%; margin-right: 3%">
                        <form method="post" enctype="multipart/form-data">
                            <input class="form-control" type="text" id="titre" name="titre" placeholder="Titre de l'article" required><br>
                            <input type="text" name="cat" id="cat" placeholder="Catégorie" class="form-control" required><br>
                            <input type="text" name="desc" id="desc" placeholder="Brève description" class="form-control" required><br>
                            <textarea class="form-control" type="text" id="content" name="content" placeholder="Contenu de l'article" required></textarea><br>
                            <input class="form-control" type="file" id="file" name="file" required><br><br>
                            <input type="submit" value="Poster" class="btn btn-success" style="width: 40%">
                        </form>
                    </div><br><br>
                    <h2>Ajouter une nouvelle étude</h2><br>
                    <div style="margin-left: 3%; margin-right: 3%">
                        <form method="post" enctype="multipart/form-data">
                            <input class="form-control" type="text" id="titretude" name="titretude" placeholder="Titre de l'étude" required><br>
                            <input type="text" name="descetude" id="descetude" placeholder="Brève description" class="form-control" required><br>
                            <input class="form-control" type="text" id="lienetude" name="lienetude" placeholder="Lien de l'étude" required><br>
                            <input class="form-control" type="file" id="fileetude" name="fileetude" required><br><br>
                            <input type="submit" value="Poster" class="btn btn-success" style="width: 40%">
                        </form>
                    </div>
                    <br><br>
                    <h2>Ajouter une nouvelle API</h2><br>
                    <div style="margin-left: 3%; margin-right: 3%">
                        <form method="post" enctype="multipart/form-data">
                            <input class="form-control" type="text" id="nomapi" name="nomapi" placeholder="Nom de l'API" required><br>
                            <input type="text" name="descapi" id="descapi" placeholder="Brève description de l'API" class="form-control" required><br>
                            <input class="form-control" type="text" id="lienapi" name="lienapi" placeholder="Lien de l'API" required><br>
                            <input class="form-control" type="file" id="fileapi" name="fileapi" required><br><br>
                            <input type="submit" value="Poster" class="btn btn-success" style="width: 40%">
                        </form>
                    </div>
                    <br><br>
                    <h2>Ajouter un nouveau podcast</h2><br>
                    <div style="margin-left: 3%; margin-right: 3%">
                        <form method="post" enctype="multipart/form-data">
                            <input class="form-control" type="text" id="titrepod" name="titrepod" placeholder="Titre du podcast" required><br>
                            <input type="text" name="descpod" id="descpod" placeholder="Brève description du podcast" class="form-control" required><br>
                            <input class="form-control" type="text" id="lienpod" name="lienpod" placeholder="Lien du podcast" required><br>
                            <input class="form-control" type="file" id="filepod" name="filepod" required><br><br>
                            <input type="submit" value="Poster" class="btn btn-success" style="width: 40%">
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <h2>Messages</h2>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contenu</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $req = $bdd->prepare('SELECT * FROM contact');
                    $req->execute();
                    $articles = $req->fetchAll();
                    foreach ($articles as $a) {
                    ?>
                        <tr>
                            <td><?php echo $a['id'] ?></td>
                            <td><b><?php echo $a['name'] ?></b></td>
                            <td><?php echo $a['email'] ?></td>
                            <td><?php echo $a['content'] ?></td>
                            <td><a href="?delcont=<?php echo $a['id'] ?>" style="text-decoration: none;">🗑️</a></td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <script type="text/javascript" src="inc/burger-menu.js"></script>
    </body>

    </html>
<?php
} else {
    header('Location: login.php');
}
