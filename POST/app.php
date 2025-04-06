<?php

    $proveraPINA = isset($_POST["PIN"]);
    if($proveraPINA == false)
    {
        die("Niste uneli PIN!");
    }
    
    $duzinaPINA = strlen($_POST["PIN"]);
    if($duzinaPINA < 4 || $duzinaPINA > 6){
    die("PIN mora biti najamnje 4 karaktera a najvise 6 karaktera");
    }

    echo "Uspesno ste uneli PIN!";
















?>