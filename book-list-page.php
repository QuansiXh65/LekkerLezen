<?php
include "script/connectdb.php";
include "templates/head.php";
include  "templates/nav.php";
?>

<div class="">
    <h2 class="header2">
        Al onze boeken
    </h2>

        <?php
        $sql = "SELECT * FROM boeken";
        $sth = $db->prepare($sql);
        $sth->execute();
        ?>

        <div class="books">
            <?php
            while($row = $sth->fetch()) { ?>
                <div class="books-box">
                    <div class="title"><?php echo "Title: " . $row["title"]; ?></div>
                    <div class="p1"><?php echo "Auteur: " . $row["auteur"]; ?></div>
                    <div class="p1"><?php echo "Talen: " . $row["languages"]; ?></div>
                    <div><a href="details.php?id=<?php echo $row['id']; ?>">
                            <img src="img/<?php echo $row['afbeelding']; ?>" alt="afbeelding" class="image"></div>
                        </a>
                    <div><a href="details.php?id=<?php echo $row['id']; ?>" class="details">Details</a></div>
                </div>
                <br>
            <?php } ?>
        </div>
</div>