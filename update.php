<?php
    require 'dbconnexion.php';

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $bdd->exec('UPDATE students SET firstname = "'.$firstname.'", lastname = "'.$lastname.'", email = "'.$email.'", phone = "'.$phone.'" WHERE id = "'.$id.'"');
    