<?php

error_reporting(0);

$do_bazy = mysqli_connect('localhost','root','','ksiegarnia3');
if (!$do_bazy) {
    exit("Błąd połączenia z serwerem MySQL.");
}

$nazwisko = $_POST['nazw'];
$imie = $_POST['im'];
$kod = $_POST['kod'];
$miasto = $_POST['mia'];
$ulica = $_POST['ul'];
$nr = $_POST['nr'];
$pesel = $_POST['pe'];
$tel = $_POST['tel'];
$mail = $_POST['adr'];

$aktualny = "UPDATE klient SET nazwisko = '$nazwisko', imie = '$imie', kod_pocztowy = '$kod', miejscowosc = '$miasto', ulica = '$ulica', nr_domu = '$nr', PESEL = '$pesel', telefon = '$tel', adres_e_mail = '$mail' WHERE Nazwisko = 'Nowak' and Imie = 'Andrzej'";

$zapytanie = mysqli_query($do_bazy, $aktualny);
if (!$zapytanie === true) {
    echo "Błąd zapytania! Dane nie zostały zaktualizowane!";
}   else {
    echo "Dane zostały zaktualizowane";
}

mysqli_close($do_bazy);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>