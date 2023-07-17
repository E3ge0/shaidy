<style>
@media only screen and (max-width: 1440px) {
    .floating-box {
        display: none;
    }
}

.game-card {
    border-radius: 10px;
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
}

.game-card img {
    border-radius: 10px;
    width: 100px;
    height: auto;
    margin-left: auto;
}

.game-card p {
    margin: 0;
    margin-right: 10px;
    font-size: 12px;
}

.game-card:hover {
    transform: scale(1.06);
    cursor: pointer;
}

.floating-box {
    max-width: 19%;
    position: fixed;
    top: 340px;
    left: 10px;
    transform: translateY(-50%);
    padding: 10px;
    border-radius: 10px;
    /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); */
    z-index: 9999;
    height: auto;

}


.hader {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
    height: 10%
}

.hader h3 {
    margin: 0;
    font-size: 20px;
    color: black;
    text-decoration: overline;
}

.hader button {
    padding-left: 8px;
    padding-right: 8px;
    border-radius: 50%;
    background-color: white;
    border: none;
}

.hader button:focus {
    outline: 0;
}
</style>

<?php
$requeteMinMaxId = $bdd->query('SELECT MIN(id) AS minId, MAX(id) AS maxId FROM articles');
$resultatMinMaxId = $requeteMinMaxId->fetch();
$minId = $resultatMinMaxId['minId'];
$maxId = $resultatMinMaxId['maxId'];

$randArticle = $maxId;
$req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
$req->execute([$randArticle]);
$news = $req->fetch();

$requeteMinMaxId = $bdd->query('SELECT MIN(id) AS minId, MAX(id) AS maxId FROM etudes');
$resultatMinMaxId = $requeteMinMaxId->fetch();
$minId = $resultatMinMaxId['minId'];
$maxId = $resultatMinMaxId['maxId'];

$randArticle = $maxId;
$req = $bdd->prepare('SELECT * FROM etudes WHERE id = ?');
$req->execute([$randArticle]);
$etude = $req->fetch();

$requeteMinMaxId = $bdd->query('SELECT MIN(id) AS minId, MAX(id) AS maxId FROM api');
$resultatMinMaxId = $requeteMinMaxId->fetch();
$minId = $resultatMinMaxId['minId'];
$maxId = $resultatMinMaxId['maxId'];

$randArticle = $maxId;
$req = $bdd->prepare('SELECT * FROM api WHERE id = ?');
$req->execute([$randArticle]);
$api = $req->fetch();

$requeteMinMaxId = $bdd->query('SELECT MIN(id) AS minId, MAX(id) AS maxId FROM podcasts');
$resultatMinMaxId = $requeteMinMaxId->fetch();
$minId = $resultatMinMaxId['minId'];
$maxId = $resultatMinMaxId['maxId'];

$randArticle = $maxId;
$req = $bdd->prepare('SELECT * FROM podcasts WHERE id = ?');
$req->execute([$randArticle]);
$podcast = $req->fetch();

?>
<div class="floating-box" id="floatingBox">
    <div class="hader">
        <h3>You might also like</h3>
    </div>
    <div style="overflow-y: auto; padding-top: 20px; padding: 20px">
        <!-- <div class="game-card" onclick="window.location.href='read.php?i=<?php echo $news['id'] ?>'">
            <p><?php echo $news['titre'] ?></p>
            <img src="upload/<?php echo $news['image'] ?>">
        </div> -->
        <div class="game-card" onclick="window.location.href='<?php echo $etude['lien'] ?>'">
            <p><?php echo $etude['titre'] ?></p>
            <img src="upload/<?php echo $etude['image'] ?>">
        </div>
        <div class="game-card" onclick="window.location.href='<?php echo $api['lien'] ?>'">
            <p><?php echo $api['titre'] ?></p>
            <img src="upload/<?php echo $api['image'] ?>">
        </div>
        <div class="game-card" onclick="window.location.href='<?php echo $podcast['lien'] ?>'">
            <p><?php echo $podcast['titre'] ?></p>
            <img src="upload/<?php echo $podcast['image'] ?>">
        </div>
    </div>

</div>