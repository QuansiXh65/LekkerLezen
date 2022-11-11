<?php
    include "script/connectdb.php";
    include "templates/head.php";
    include "templates/nav.php";

$name = $_POST['name'];
$surname = $_POST['surname'];
$question = $_POST['question'];
$email = $_POST['email'];

$valid = true;
if (empty($name)) {
    $valid = false;
} elseif (empty($surname)) {
    $valid = false;
} elseif (empty($question)) {
    $valid = false;
} elseif (empty($email)) {
    $valid = false;
}
?>
<div class="contact">
    <div class="p2">
        <?php
        if ($valid == true) {
                echo "Bedankt voor uw bericht $name $surname, we mailen zsm naar dit adres: $email.<br><br>";
            }else{
                echo "Vul alles in!";
        }
        ?>
    </div>
    <form>
        <input type="button" value="Terug" onclick="history.back()" class="send">
    </form>
</div>