<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ABH Contacts</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="contacts.css">-
</head>
<body>
	<div id="anchor"></div>
	<!-- le navigateur permanent-->
	<?php include("header.php");?>

	<!--la page principale-->
	<div id="contact_page">
		<section id="contact_section">
			<!--section info + google map-->
			<div id="left_side">
				<!--section pour coordonnées-->
				<article id="coordonnees_article_left">
					<h3>COORDONNÉES</h3>
					<p>
						<strong>adresse :</strong> 26 rue de la Chasse à Eaux 50110 Cherbourg-en-Cotentin / Tourlaville<br/>
						<strong>numéro :</strong> 07.52.59.14.46<br/>
						<strong>mail :</strong> Menuiserie.abh@outlook.fr<br/>
					</p>

					<h3>HORAIRES D'OUVERTURE</h3>
					<p>
						<strong>Lundi à Jeudi :</strong> 8H00-18H00<br/>
						<strong>Vendredi :</strong> 8H00-17H00<br/>
						<strong>Fermé le week-end</strong><br/>
					</p>
				</article>
				
				<!--google map-->
				<figure class="google_map_figure">
					<h1>PLAN D'ACCÈS</h1>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1291.950359125432!2d-1.5765263017871163!3d49.63732576666843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480c990207c1ff1b%3A0xbca07401a4af8a94!2sMenuiserie%20ABH!5e0!3m2!1sfr!2sfr!4v1618599545501!5m2!1sfr!2sfr" id="google_map" allowfullscreen="" loading="lazy">
					</iframe>
				</figure>
			</div>

			<!--section pour l'email-->
			<article id="coordonnees_article_right">
				<h2>Contactez-nous</h2>
				<form id="coordonnees_article_formulaire" method="post" action=mail.php>
					<!--les coordonnées de la personnes-->
					<fieldset id="coordonnees_article_formulaire_1fieldset">
						<legend>Vos coordonnées</legend>

						<input type="text" name="nom" placeholder="nom *" required></br>

						<input type="text" name="prenom" placeholder="prénom *" required></br>

						<input type="tel" name="telephone" placeholder="téléphone *" required/></br>

						<input type="email" name="email" placeholder="e-mail *" required>
						
						<input type="text" name="adresse" placeholder="adresse (non obligatoire)">

						<input type="text" name="societe" placeholder="société (non obligatoire)">
					</fieldset>

					<!--information plus poussées-->
					<fieldset>
						<legend>Message :</legend>
						<textarea placeholder="votre message *"  name="message" rows="15" required></textarea></br>

					</fieldset>

					<input id="coordonnees_article_formulaire_submit" type="submit" value="Envoyer **">
					<p>
						* signifie que le champ est obligatoire pour que le formulaire soit envoyer </br>
						** en envoyant le formulaire, vous acceptez que l'entreprise ABH vous recontacte
					</p>
				</form>
			</article>
		</section>

		<!--le pied de page-->
		<?php include("footer.php");?>
	</div>
</body>
</html>