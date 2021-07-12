<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ABH Menuiserie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div id="anchor"></div>
	<!-- le navigateur permanent-->
	<?php include("header.php");?>


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
				<h3>
					Contactez-nous ! Nous serons ravis de vous fournir les informations que vous souhaitez.
				</h3>

				<a href="contacts.html">
					<button id="presentation_contact_button" >
						Contactez-nous!
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
				<figure id="compagny_section_figure">
					<div id="compagny_section_figure_image"></div>
				</figure>
				<article id="compagny_section_article">
					<p>
						nous aménageons votre utilitaire pour qu'il s'adapte à vos activités professionnelles ou loisirs, toutes nos réalisations sont faites sûr-mesures en fonction de vos besoins. </br>
						Nous vous proposons des solutions personnalisées afin d'aménager votre véhicule comme vous le souhaitez. Nous travaillons les véhicules quelque soit leur marque : Peugeot, Fiat, Renauth, Wolkswagen, Ford, Mercedes, Iveco,... </br>
						Nous mettons en oeuvre tout notre savoir faire ainsi que nos connaissances dans le domaine de l'aménagement et l'équipement de véhicules.
					</p>

					<div>
						<a href="nos_realisations.html">
							<button>
								Aller voir nos réalisations
							</button>
						</a>
					</div>
				</article>
			</section>
		</section>

		<!--section services-->
		<section id="services">
			<header id="services_title">
				<h2>
					Nos services
				</h2>
			</header>
			<section id="services_section">
				<!--1er ligne-->
				<figure>
				
					<figcaption>Aménage de véhicules utilitaires</figcaption>
				</figure>
				<figure>
				
					<figcaption>Habillage protection intérieur de véhicules</figcaption>
				</figure>
				<figure>
				
					<figcaption>Découpe de panneaux et gravages</figcaption>
				</figure>
				<!--2ème ligne-->
				<figure>
				
					<figcaption>Fabrication de meubles sur mesures</figcaption>
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
		<?php include("footer.php");?>
	</div>
</body>
</html>