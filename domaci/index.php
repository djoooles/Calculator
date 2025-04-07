<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaci Zadatak</title>
</head>
<body> 
    <form method="get" action="app.php">
        <input type="text" name="broj_1" placeholder="Unesite iznos">
        <br>
        <select name="odabiranje">
            <option value="Hrana">Hrana</option>
            <br>
            <option value="Oprema">Oprema za Racunare</option>
        </select>
        <br><br>
        
        <input type="checkbox" name="Porez">Stikliraj da ukljucis porez.
        <br>
        <button type="submit">Izracunaj Cenu</button>
        </form>
    </body>
</html>
