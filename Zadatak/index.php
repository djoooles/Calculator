<?php
                                        
                    //imena\\
    $imena = ["toma","marko","petar"];

    $proveri_Ime = isset($_POST["ime"]);
    if($proveri_Ime == false)
    {                                   
        die("Niste uneli ime!");
    }
    //Iz velika u mala slova\
    $unesenoIme = strtolower($_POST["ime"]);
    
    if(strlen($unesenoIme) < 4 ) 
    {
        die("Ime Mora imati barem 3 karaktera");
    }  

    if(in_array($unesenoIme, $imena))
    {
        echo "Uspesno ste pronasli korisnika";
    }
    //pisanje greske ako je uneto ime koje nije na listi
    else 
    {
        echo "Nismo pronasli korisnika u listi korisnika";
    }






?>