<?php
include "dbconnexion.php";
$nb_supp = $cnx->exec("DELETE FROM students WHERE id='' ");
?>