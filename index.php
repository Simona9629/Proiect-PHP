<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once 'functii/sql_functions.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
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
