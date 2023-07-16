<div id="mySidenav" class="sidenav">
    <a id="closeBtn" href="#" class="close"></a>
    <ul>
        <?php
        include_once 'inc/bdd.php';
        $req = $bdd->prepare('SELECT DISTINCT category FROM articles ORDER BY category');
        $req->execute([]);
        $categories = $req->fetchAll();
        foreach ($categories as $cat) {
        ?>
            <li><a href="news.php?cat=<?php echo $cat[0] ?>"><?php echo $cat[0] ?></a></li>
        <?php
        }
        ?>

        <?php
        if (!isset($_SESSION['pseudo'])) {
        ?>
            <li align="center"><a href="login.php" style="font-size: 15px; color: red">Connexion Admin</a></li>

        <?php
        } else { ?>
            <li align="center" style="display: flex"><a href="dashboard.php" style="font-size: 15px; color: black">Dashboard</a><a href="deco.php" style="font-size: 15px; color: red">Deconnexion</a></li>

        <?php
        }
        ?>
    </ul>
</div>
<nav class="navbar navbar-expand-lg navbar-dark static-top">
    <div class="container" style="margin-left: 0; width: auto">
        <a class="navbar-brand" href="#">
            <img style="border-radius: 10px" src="https://i.pinimg.com/736x/4b/88/69/4b88699a4593e97893c8b5ac59412f25--marius-typography.jpg" alt="..." height="40">
        </a>

    </div>
    <div style="margin-right: 50px;">
        <a style="font-size: 20px; margin-right: 20px" href="index.php">Home</a>
        <a style="font-size: 20px; margin-right: 20px" href="news.php">News</a>
        <a style="font-size: 20px; margin-right: 20px" href="contact.php">Contact</a>
    </div>
    <div style="margin-right: 20px">
        <a href="#" id="openBtn">
            <span class="burger-icon" id="burgerIcon">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </span>
        </a>
    </div>
</nav>