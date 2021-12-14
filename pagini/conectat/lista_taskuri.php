<h2>Lista taskuri</h2>

<form method="get">
    <div class="form_settings">
        <p>
           <select name="kw">
                <option value="task">task</option>
                <option value="eveniment">eveniment</option>
                <option value="reminder">reminder</option>
            </select> 
        </p>
        <p>
            <input class="submit" type="submit" name="filtreaza" value="Filtreaza" />
        </p>
    </div>
</form>
<br>
<a href="index.php?reseteaza">Reseteaza filtrele</a>
<br>



<?php
$id = $_SESSION['id_user'];

if (isset($_GET['reseteaza'])) {
    setcookie('keyword', '', time()-1);
    header('location: index.php');
}

if (isset($_GET['filtreaza'])) {
    $keyword = $_GET['kw'];
    $taskuri = preluareTaskuriDupaKeywordIdUtilizator($keyword, $id);
    setcookie('keyword', $keyword, time()+24*3600);
    
} elseif (isset($_COOKIE['keyword'])) {
    $keyword = $_COOKIE['keyword'];
    $taskuri = preluareTaskuriDupaKeywordIdUtilizator($keyword, $id);
    
} else {
    $taskuri = preluareTaskuriDupaIdUtilizator($id);
}

if (count($taskuri) == 0) {
    print "Niciun task salvat. <a href='index.php?page=1'>Adauga un task</a>";
    return;
}
?>
<p>
    <table style="border-spacing:0; width:100%;">
        <thead>
            <th>Titlu</th>
            <th>Data</th>
            <th>Tip</th>
            <th>Descriere</th>
            <th>Status</th>
            <th> </th>
        </thead>
        <tbody>
            <?php foreach ($taskuri as $task) {?>
            <tr>
                <td>
                    <?php print $task['titlu']; ?>
                </td>
                <td>
                    <?php print $task['data']; ?>
                </td>
                <td>
                    <?php print $task['tip']; ?>
                </td>
                <td>
                    <?php print $task['descriere']; ?>
                </td>
                <td>
                    <?php 
                        if ($task['status'] == 0) {
                            print 'in asteptare';
                        } else {
                            print 'terminat';
                        }
                    ?>
                </td>
                <td>
                    <a href='index.php?finalizeaza=<?php print $task['id']; ?>'>Marcheaza ca finalizat</a>
                </td>
            </tr>
            <?php }?>
        </tbody>

    </table>
</p>
