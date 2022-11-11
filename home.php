<?php
include "templates/head.php";
include "templates/nav.php";
?>

<br>
  <div class="welcome-box">
    <h2 class="welcome">Welkom,</h2><br>
        <p class="p2">
            Wij zijn boekhandel Lekker Lezen. Een klein maar fijne boekenzaak.
            En we zijn bij jou in de buurt!<br>
            Neem gauw een kijkje.

            <img src="img/library4.jpg"  style="max-width: 400px" alt="afbeelding" class="wlcm-img">

        </p>
      <div class="box">
            <p class="p3">
                Waar kun je ons vinden?<br><br>

                Onze locatie:<br>
                Laat 123<br>
                1234AB Alkmaar<br>
                072 1234567<br>
            </p>
      </div>
  </div>
    <br>

<?php
//onze top tien
include "toptien-lijst.php";
include "templates/footer.php";
?>


