<?php
    include "script/connectdb.php";
    include "templates/head.php";
    include "templates/nav.php";
?>

     <h2 class="header2">Contact</h2>
        <div class="contact">
            <form action="contact.php" method="post">
                <label class:>Voornaam</label><br>
                    <input type="text" name="name" ><br><br>
                <label>Achternaam</label><br>
                    <input type="text" name="surname" ><br><br>
                <label>E-mail</label><br>
                    <input type="email" name="email"<br><br><br>
                <label>Vraag of opmerking</label><br>
                    <textarea style="resize:none" name="question" cols="40" rows="5" ></textarea><br><br>
                <input type="submit" name="send" id="send" class="send">
            </form>
         </div>