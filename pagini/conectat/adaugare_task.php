<h2>Adaugare task</h2>
<form method="post">
    <div class="form_settings">
        <p>
           <span>Titlu</span>
           <input type="text" name="titlu" id="titlu" />
        </p>
        <p>
            <span>Data</span>
            <input type="date" name="data" id="data" />
        </p>
        <p>
            <span>Tip</span>
            <select name="tip">
                <option value="task">task</option>
                <option value="eveniment">eveniment</option>
                <option value="reminder">reminder</option>
            </select>
        </p>
        <p>
            <span>Descriere</span>
            <textarea rows="8" cols="50" name="descriere"></textarea>
        </p>
        <p style="padding-top: 15px">
            <span>&nbsp;</span>
            <input class="submit" type="submit" name="adauga" value="Adauga" />
        </p>
    </div>
</form>
<?php
if (isset($_POST['adauga'])) {
    $titlu = $_POST['titlu'];
    $data = $_POST['data'];
    $tip = $_POST['tip'];
    $descriere = $_POST['descriere'];
    
    $id_utilizator = $_SESSION['id_user'];
    
    $rez = adaugareTask($titlu, $data, $descriere, $tip, $id_utilizator);
    
    if ($rez) {
        print "Taskul a fost adaugat cu succes";
    } else {
        print "Eroare la adugarea taskului";
    }
}




