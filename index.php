<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once 'functii/sql_functions.php';

if (isset($_GET['finalizeaza'])) {
    $id = $_GET['finalizeaza'];
    actualizareStatusDupaIdTask($id);

}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        
    </head>
    <body>
        <?php
        if (isset($_SESSION['user']) && isset($_SESSION['id_user'])) {
            require_once 'templates/template_conectat.php';
        } else {
            require_once 'templates/template_neconectat.php';
        }  
        ?>
    </body>
</html>
