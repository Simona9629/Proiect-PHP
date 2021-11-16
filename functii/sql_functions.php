<?php
function conectareBD($host = 'localhost', $user = 'root', $password = '', $database = 'agenda') {
    return mysqli_connect($host, $user, $password, $database);
}

function inregistrareUtilizator($nume, $prenume, $email, $parola) {
    $link = conectareBD();
    $query = "INSERT INTO utilizator VALUES(null, '$nume', '$prenume','$email','$parola')";
    return mysqli_query($link, $query);
}

