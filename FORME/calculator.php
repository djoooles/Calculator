<?php



$vrstaRacunice = $_GET["vrsta_racunice"];
$broj_1 = $_GET["broj_1"];
$broj_2 = $_GET["broj_2"];

if($vrstaRacunice == "Sabiranje")
{
    echo $broj_1 + $broj_2;
}
else if($vrstaRacunice == "Oduzimanje")
{
    echo $broj_1 - $broj_2;
}
elseif($vrstaRacunice == "Mnozenje")
{
    echo $broj_1 * $broj_2;
}
else if($vrstaRacunice == "Deljenje")
{
    echo $broj_1 / $broj_2;
}
else if($vrstaRacunice == "Koren")
{
    echo sqrt($broj_1);
}
?>



