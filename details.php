<?php
include "script/connectdb.php";
include "templates/head.php";
include "templates/nav.php";

$id=$_GET['id'];
//haalt info uit de database
$sql = 'SELECT * FROM boeken WHERE id = :id';
$sth = $db->prepare($sql);
$sth->execute([':id'=>$id]);

$row = $sth->fetch();

if ($row == false) {
    echo "Dit ID bestaat niet!";
    die();
}
?>

<div class="detail-box">
        <div>
            <div class="rating"><?php echo "Rating: " . $row["rating"]; ?></div>
            <div class="title"><?php echo "Title: " . $row["title"]; ?></div>
            <div class="p1"><?php echo "Auteur: " . $row["auteur"]; ?></div>
            <div class="p1"><?php echo "Uitgevers: " . $row["publishers"]; ?></div>
            <div class="p1"><?php echo "Talen: " . $row["languages"]; ?></div>
            <div><img src="img/<?php echo $row['afbeelding']; ?>" alt="afbeelding" class="image"></div>
            <div class="p1"><?php echo "Beschrijving " . $row["commentaar"]; ?></div>
            <div class="price"><?php echo "Prijs: " . $row["price"]; ?></div>
        </div>
        <br>
    <form>
        <input type="button" value="Terug" onclick="history.back()" class="send">
    </form>
</div>
