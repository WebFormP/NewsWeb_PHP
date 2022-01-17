<!DOCTYPE html>
<html lang="fr">
	<head>

        <!-- Comme le titre de la page est chaque fois différent,
        il est nécessaire de connaître le nom du fichier demandé pour
        savoir quel texte afficher dans la balise TITLE.
        La variable $_SERVER['PHP_SELF'] permet de connaître le fichier lu actuellement
        La fonction PHP basename() permet d'extraire le nom du fichier
        -->
        <?php
            $title="";  /* cette variable contient le texte à placer dans <title> */
            $idbody=""; /* cette variable contient l'id à mettre dans <body> pour le CSS */
            switch(basename($_SERVER['PHP_SELF'])) {
                case "homepage.php" : $title = "NewsWeb - Accueil"; $idbody = "home"; break;
                case "blog.php" : $title = "NewsWeb - Tous les articles"; $idbody = "blog"; break;
                case "article.php" : $title = "NewsWeb - Article"; $idbody = "blog"; break;
                case "contact.php" : $title = "NewsWeb - Contact"; $idbody = "contact"; break;
                default : $title = "NewsWeb";
            }
            echo "<title>".$title."</title>";
        ?>

        <meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />

		<!-- Lien vers le CDN (Content Delivery Network) pour le jQuery -->
		<!-- D'abord la librairie jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<!-- Ensuite le plugin utilisant jQuery : ici, c'est le slider -->
		<script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>

		<!-- Commentaire conditionnel pour les navigateurs Internet Explorer avant la version 9 (par exemple: IE8, IE7,...) c'est-à-dire avant 2011 -->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Librairie d'icônes -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>


	<body id="<?php echo $idbody; ?>">
		<div id="wrapper">
			<!--__--__--__--__--__--  L O G O   --__--___--__--__--__-->
			<div id="logo">
				<h1>News <span id="iisrt"><span id="ii">II</span>  <span id="srt">WEB</span></span></h1>
				<div id="tagline">
					<h2>On a faim d'infos !</h2>
				</div>
			</div>

			<!--__--__--__--__--__--  N A V    B A R --__--___--__--__--__-->
			<nav class="topnav" id="topnav">
				<ul>
					<li id="menu">
						<a href="javascript:void(0);" class="icon" onclick="hamburger()">MENU <i class="fa fa-bars"></i></a>
					</li>
					<li><a href="homepage.php" id="homenav">Accueil</a></li>
					<li><a href="blog.php" id="blognav">Les articles</a></li>
					<li><a href="contact.php" id="contactnav">Contact</a></li>
					<li><a href="admin.php" id="admin">Admin</a></li>
				</ul>
			</nav>
