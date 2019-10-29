

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    try {
    $bdd = new PDO('mysql:host=localhost;dbname=dsi22_g2_2019;charset=utf8', 'root',
    '');

    } catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
    // On récupère les données du formulaire

    $firstname = $_POST['firstname'] ;
    $lastname = $_POST['lastname'] ;
    $email = $_POST['email'] ;
    $phone = $_POST['phone'] ;

    // On ajoute une entrée dans la table personne
    $bdd->exec("INSERT INTO students (firstname,lastname, email,phone) VALUES ('$firstname', '$lastname','$email','$phone')");
    echo "La personne a bien été ajoutée ! " ;
    ?>


</body>
</html>
