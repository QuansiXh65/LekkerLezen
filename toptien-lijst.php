<?php
    include "script/connectdb.php";
?>

<div class="ten-books-box">
<h2 class="h2">Onze top tien:</h2>

    <br>
    <?php
    $sql = "SELECT * FROM boeken ORDER BY rating DESC LIMIT 10";
    $sth = $db->prepare($sql);
    $sth->execute();
?>
    <?php
        while($row = $sth->fetch()) { ?>

            <div>
                <div class="title"><?php echo "Title: " . $row["title"]; ?></div>
                <div class="p1"><?php echo "Auteur: " . $row["auteur"]; ?></div>
                <div class="p1"><?php echo "Talen: " . $row["languages"]; ?></div>
                <div><img src="img/<?php echo $row['afbeelding']; ?>" alt="afbeelding" class="image"></div>
                <div><a href="details.php?id=<?php echo $row['id']; ?>" class="details">Details</a></div>
            </div>
        <br>
    <?php } ?>
</div>