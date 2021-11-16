<h2>Inregistrare</h2>
<form method="post">
    <div class="form_settings">
        <p>
           <span>Nume</span>
           <input type="text" name="nume" id="nume" />
        </p>
        <p>
            <span>Prenume</span>
            <input type="text" name="prenume" id="nume" />
        </p>
        <p>
            <span>Email</span>
            <input type="email" name="email" id="email" />
        </p>
        <p>
            <span>Parola</span>
            <input type="password" name="pass" id="pass"/>
        </p>
        <p style="padding-top: 15px">
            <span>&nbsp;</span>
            <input class="submit" type="submit" name="inregistrare" value="Inregistrare" />
        </p>
    </div>
</form>

<?php
require_once 'functii/sql_functions.php';

if (isset($_POST['inregistrare'])) {
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $parola = $_POST['pass'];
    $rez_user = inregistrareUtilizator($nume, $prenume, $email, $parola);
    
    if ($rez_user) {
        print '<p style="color: green"> Utilizator inregistrat cu succes</p>';
    } else {
        print '<p style="color: red"> Utilizatorul nu a fost inregistrat</p>';
    }
}


