<h2>Vizualizare profil</h2>

<?php
$email = $_SESSION['user'];
$utilizator = preiaUtilizatorDupaEmail($email);
?>
<span class="left"><img src="imagini/no_profile.png" /></span>
<p>
    <table style="border-spacing:0; width:50%;">
        <tr>
            <td>Nume</td>
            <td><?php print $utilizator['nume'];?></td>
        </tr>
        <tr>
            <td>Prenume</td>
            <td><?php print $utilizator['prenume'];?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><?php print $utilizator['email'];?></td>
        </tr>
    </table>

</p>


<form method="get" class="left">
    <div class="form_settings">
        <p>
           <span>Adauga poza de profil</span>
           <input type="file" name="poza"/>
        </p>
        <p style="padding-top: 15px">
            <span>&nbsp;</span>
            <input class="submit" type="submit" name="adauga_poza" value="Adauga poza" />
        </p>
    </div>
</form>
