<?php
      //domaci/calculator.php?broj_1=&odabiranje=Hrana
if($_GET["odabiranje"] == "Hrana") {
    $ukupno = $_GET["broj_1"] + 50;
}
elseif ($_GET["odabiranje"] == "Oprema") {
    $ukupno = $_GET["broj_1"] + 350;
}


if(isset($_GET["Porez"])) {
    $ukupno *= 1.10; // Množenje sa 1.20 dodaje 20%
    echo "Ukupna cena sa porezom je  ";

} else {
    echo "Ukupna cena bez porezom je ";
}

echo $ukupno;
?>