<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.html");?>

    <div style="position: relative; top: 100px; width: 100%; height: 100%; display: flex; justify-content: center;">
        <?php
        $final_message = 'Message envoyé depuis la page Contact de monsite.fr
        
        Nom : ' . $_POST['nom'] .'
        Prenom : ' . $_POST['prenom'] .' 
        Email : ' . $_POST['email'] .' 
        Telephone : ' . $_POST['telephone'] .' 
        Adresse : ' . $_POST['adresse'] .'
        Société : ' . $_POST['societe'] .'

        Message : ' . $_POST['message'];


        $retour = mail('contact@menuiserieabh.fr', 'Envoi depuis la page Contact', $final_message, 'From : site web');
        if ($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
        ?> 
    </div>
</body>
</html>