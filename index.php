<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ABH Menuiserie</title>
	<link rel="stylesheet" type="text/css" href="style.css?ts=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="index.css?ts=<?=time()?>">
</head>
<body>
	<div id="anchor"></div>
	<!-- le navigateur permanent-->
	<?php include("header.html");?>

	<!--la page principale-->
	<div id="welcome_page">
		<!--première illustration-->
		<div id="illustration"></div>

		<!--1er section-->
		<section id="presentation">
			<!--section sur les points de l'entreprise-->
			<article id="presentation_article">
				<div id="presentation_article_list">
					<h3>Qu'est-ce que nous faisons ?</h3>
					<ul>
						<li>Aménagement de véhicule extérieur et intérieur</li>
						<li>Signalisations lumineuses et balises de sécurité</li>
						<li>Accessoires pour véhicule</li>
						<li>Aménagement pour les professionnels et particuliers</li>
						<li>Découpe de panneaux multimatériaux (bois/plexiglass/composite...)</li>
						<li>Plaquage de chants pour meubles</li>
					</ul>
				</div>
			</article>
			
			<!--section contact-->
			<aside id="presentation_contact">
				<h4>
					Contactez-nous ! Nous serons ravis de vous fournir les informations que vous souhaitez.
				</h4>

				<a href="contacts.php">
					<button id="presentation_contact_button" >
						<strong>Contactez-nous!</strong>
					</button>
				</a>
			</aside>
		</section>

		<!--section la société-->
		<section id="compagny">
			<header id="compagny_title">
				<h2>
					Notre société
				</h2>
			</header>

			<section id="compagny_section">
				<!--1er partie sur les véhicules-->
				<div id="compagny_section_1">
					<aside>
						<figure style="background-image: url(nos_services/gravage_decoupe.jpg); background-size: cover; background-position: center;">

							<figcaption>Une réalisation</figcaption>
						</figure>
					</aside>
					<article id="compagny_section_1_article">
						<p>
						Nous aménageons votre utilitaire pour qu'il s'adapte à vos activités professionnelles ou loisirs, toutes nos réalisations sont faites sûr-mesures en fonction de vos besoins. </br>
						Nous vous proposons des solutions personnalisées afin d'aménager votre véhicule comme vous le souhaitez. Nous travaillons les véhicules quelque soit leur marque : Peugeot, Fiat, Renault, Wolkswagen, Ford, Mercedes, Iveco,... </br>
						Nous mettons en oeuvre tout notre savoir faire ainsi que nos connaissances dans le domaine de l'aménagement et l'équipement de véhicules.
						</p>
					</article>
				</div>
				<!--2ème partie sur la découpe de panneaux-->
				<div id="compagny_section_2">
					<article id="compagny_section_2_article">
						<p>
							Nous réalisons la découpe de panneaux de contreplaqués, mélaminés, MDF, OSB, aluminiums sûr-mesure. Choissisez la matière, les dimensions, nous nous chargerons du reste. </br>
							Nous réalisons le placage de chants, panneaux, ...
						</p>
					</article>
					<aside>
						<figure style="background-image: url(realisation/real_3/meuble_1.jpg); background-size: cover; background-position: center;">
						
							<figcaption>Une réalisation</figcaption>
						</figure>
					</aside>	
				</div>
		</section>
	</section>

		<!--section services-->
		<section id="services">
			<header id="services_title">
				<h2>Nos services</h2>
			</header>
			<section id="services_section">
				<!--1er ligne-->
				<figure style="background-image: url(realisation/real_2/arriere.jpg);">
				
					<figcaption>Aménage de véhicules utilitaires</figcaption>
				</figure>
				<figure>
				
					<figcaption>Habillage protection intérieur de véhicules</figcaption>
				</figure>
				<figure style="background-image: url(nos_services/gravage_decoupe.jpg);">
				
					<figcaption>Découpe de panneaux et gravages</figcaption>
				</figure>
				<!--2ème ligne-->
				<figure>
				
					<figcaption>Fabrication de meubles sur-mesures</figcaption>
				</figure>
				<figure>
				
					<figcaption>Fabrication d'enseignes</figcaption>
				</figure>
				<figure>
				
					<figcaption>Prochainement ...</figcaption>
				</figure>
			</section>
		</section>

		<!--le pied de page-->
		<?php include("footer.html");?>
	</div>
</body>
</html>