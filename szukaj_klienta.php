<?php

error_reporting(0);

$do_bazy = mysqli_connect('localhost', 'root' ,'', 'ksiegarnia3');
if (!$do_bazy) {
    exit("Błąd połączenia z serwerem MySQL.");
}





$zapytanie = mysqli_query($do_bazy, "SELECT * FROM Klient WHERE Nazwisko = 'Nowak' and Imie = 'Andrzej'");

$ile = mysqli_num_rows($zapytanie);

if (!$zapytanie === true)  {
    mysqli_close($do_bazy);
    exit("Błąd w zapytaniu.");
}

if ($ile = 0) {
    exit("Brak danych.");
}

if ($ile > 1) {
    exit("Nie można wyodrębnic danych.");
}

$wiersz = mysqli_fetch_array($zapytanie);
$nazw = $wiersz['nazwisko'];
$im = $wiersz['imie'];
$kod = $wiersz['kod_pocztowy'];
$mia = $wiersz['miejscowosc'];
$ul = $wiersz['ulica'];
$nr = $wiersz['nr_domu'];
$pesel = $wiersz['PESEL'];
$tel = $wiersz['telefon'];
$adr = $wiersz['adres_e_mail'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-weight: bold;
            font-size: 12pt;
        }
    </style>
</head>
<body>
    <form action="aktualizuj.php" method="post">
        <p>Modyfikacja danych klienta</p>
        Nazwisko:<br>
        <input type="text" name="nazw" value="<?php echo $nazw; ?>" size="30"><br>
        Imię:<br>
        <input type="text" name="im" value="<?php echo $im; ?>" size="30"><br>
        Kod_pocztowy:<br>
        <input type="text" name="kod" value="<?php echo $kod; ?>" size="30"><br>
        Miejscowosc:<br>
        <input type="text" name="mia" value="<?php echo $mia; ?>" size="30"><br>
        Ulica:<br>
        <input type="text" name="ul" value="<?php echo $ul; ?>" size="30"><br>
        Numer Domu:<br>
        <input type="text" name="nr" value="<?php echo $nr; ?>" size="30"><br>
        Adres E-mail:<br>
        <input type="text" name="mail" value="<?php echo $adr; ?>" size="30"><br>
        PESEL:<br>
        <input type="text" name="pesel" value="<?php echo $pesel; ?>" size="30"><br>
        Telefon:<br>
        <input type="text" name="tel" value="<?php echo $tel; ?>" size="30"><br>

        <br><input type="submit" name="akt" value="Aktualizuj">
    </form>
    
</body>
</html>



