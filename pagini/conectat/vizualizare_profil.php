<h2>Vizualizare profil</h2>

<?php
$email = $_SESSION['user'];
$utilizator = preiaUtilizatorDupaEmail($email);
?>
<span class="left"><img width="200px" height="200px" src="imagini/<?php print (!empty($utilizator['poza_profil'])) ? $utilizator['poza_profil'] : 'no_profile.png';?>" /></span>
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


<form method="post" enctype="multipart/form-data" class="left">
    <div class="form_settings">
        <p>
           <span>Adauga poza de profil</span>
           <input type="file" name="poza" id="poza"/>
        </p>
        <p style="padding-top: 15px">
            <span>&nbsp;</span>
            <input class="submit" type="submit" name="adauga_poza" value="Adauga poza" />
        </p>
    </div>
</form>

<?php
$phpFileUploadErrors = array(
    0 => 'There is no error, the file uploaded with success',
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.',
);

if (isset($_POST['adauga_poza'])) {
    if (isset($_FILES['poza'])) {
        if ($_FILES['poza']['error'] == 0) {
            switch ($_FILES['poza']['type']) {
                case 'image/jpg':
                case 'image/jpeg':
                case 'image/png':
                case 'image/bmp':
                case 'image/gif':    
                    $numeImagine = uniqid() . $_FILES['poza']['name'];
                    $salvareServer = move_uploaded_file($_FILES['poza']['tmp_name'], 'imagini/'.$numeImagine);
                    if ($salvareServer) {
                        $id = $_SESSION['id_user'];
                        $salvareBD = updateUtilizatorDupaId($id, $numeImagine);
                        if ($salvareBD) {
                            print "Poza de profil a fost actualizata";
                        }
                        else {
                            unlink('imagini/'.$numeImagine);
                            print "A aparut o eroare la salvarea in baza de date";
                        }
                    } else {
                        print "Eroare la salvarea pe server";
                    }
                    break;
                default:
                    print "Fisierul selectat nu are un format acceptat(jpg/ jpeg/ png/ bmp/ gif)";
            }
        } else {
            print "A aparut o eroare: " . $phpFileUploadErrors[$_FILES['poza']['error']];   
        }
    }
}

?>