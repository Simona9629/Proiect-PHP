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
                <option value="t">task</option>
                <option value="even">eveniment</option>
                <option value="rem">reminder</option>
            </select>
        </p>
        <p>
            <span>Descriere</span>
            <textarea rows="8" cols="50" name="descriere"></textarea>
        </p>
        <p style="padding-top: 15px">
            <span>&nbsp;</span>
            <input class="submit" type="submit" name="adugare" value="Adauga" />
        </p>
    </div>
</form>
<?php
require_once 'functii/sql_functions.php';




