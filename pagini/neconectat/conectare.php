<h2>Conectare</h2>
<form method="post">
    <div class="form_settings">
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
            <input class="submit" type="submit" name="login" value="Login" />
        </p>
    </div>
</form>
<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $parola = $_POST['pass'];
    $rezultat = conectareUtilizator($email, $parola);
    
    if ($rezultat) {
        $_SESSION['id_user'] = preiaUtilizatorDupaEmail($email)['id'];
        $_SESSION['user'] = $email;
        header('location: index.php');
    } else {
        print "<h3 style='color: red'> Eroare la conectare </h3>";
    }
}


