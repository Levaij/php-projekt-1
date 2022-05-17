<?php

$do_bazy = mysqli_connect( 'localhost', 'root', '', 'moje_kino');
if (!$do bazy) {
    exit ("Blad połączenia z serwerem MySQL.");
}

$tab = "CREATE TABLE Film (Tytul filmu VARCHAR(30), Rezyser VARCHAR (30), Rok_prod VARCHAR (4))";

if (mysqli_query($do_bazy, $tab)) {    
    echo "Tabela Film została utworzona";
} else {
echo "Bład! Nie można utworzyć tabeli Film";
}

mysql_close ($do_bazy);

?>