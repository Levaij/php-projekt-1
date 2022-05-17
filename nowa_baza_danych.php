<?php

error_reporting(0);

$do_bazy = mysqli_connect('localhost','root','','ksiegarnia3');
if (!$do_bazy) {
    exit("Błąd połączenia z serwerem MySQL.");
}

$baza_sql = "CREATE DATABASE moje_kino";
if (mysqli_query($do_bazy, $baza_sql)) {
    echo "Baza zostałą utworzona";
}   else {
    echo "Błąd! Nie można utworzyć bazy"
}

mysqli_close($do_bazy);

?>