<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.html");?>
    <!--partie principale-->
    <div style="position: relative; top: 100px; width: 100%; min-height: 900px; display: flex; flex-direction: column;">
        <div style="width: 100%; height: 600px; display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: #999999;">
            <?php
            $final_message = 'Message envoye depuis la page Contact de monsite.fr

            Nom : ' . $_POST['nom'] .'
            Prenom : ' . $_POST['prenom'] .' 
            Email : ' . $_POST['email'] .' 
            Telephone : ' . $_POST['telephone'] .' 
            Adresse : ' . $_POST['adresse'] .'
            Societe : ' . $_POST['societe'] .'

            Message : ' . $_POST['message'];


            $retour = mail('adressemail@mettre ton adresse mail ici', 'Envoi depuis la page Contact', $final_message, 'From : page contact');
            if ($retour) {
                echo '<p style="white; color: black; text-shadow: none; font-size: 1.5em; width: 50%; height: 2em; text-align: center;">Votre message a bien été envoyé.</p>
                <a href="contacts.php" style="white; color: black; text-shadow: none; font-size: 1.5em; width: 50%; height: 2em; text-align: center";>Revenir à la page des contacts</a>';
            }
            ;?>
        </div>

        <?php include("footer.html"); ?>    
    </div>
</body>
</html>