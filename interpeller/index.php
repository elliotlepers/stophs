<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 


        <title>#StopHS - Harcèlement sexuel : calculez, réagissez.</title>
		<meta name="description" content="Les violences sexuelles contre les femmes ont lieu aussi au travail. Calculez le nombre de vos collègues concernées et réagissez !" />

		<meta property="og:type" content="website">
		<meta property="og:title" content="#StopHS - Harcèlement sexuel : calculez, réagissez." />
		<meta property="og:site_name" content="#StopHS"/>
		<meta property="og:url" content="http://stophs.fr" />
		<meta property="og:description" content="Les violences sexuelles contre les femmes ont lieu aussi au travail. Calculez le nombre de vos collègues concernées et réagissez ! " />
		<meta property="og:image" content="http://stophs.fr/images/share.png" />
	
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="#StopHS - Harcèlement sexuel : calculez, réagissez.">
		<meta name="twitter:description" content="Les violences sexuelles contre les femmes ont lieu aussi au travail. Calculez le nombre de vos collègues concernées et réagissez ! ">
		<meta property="twitter:image" content="http://stophs.fr/images/share.png" />

		<link rel="shortcut icon" href="../images/favicon.png"> 
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
		<link rel="stylesheet" href="../css/jquery.fullpage.css">
		<link rel="stylesheet" href="../css/animate.css">
		<script src="../js/modernizr.custom.js"></script>
		<script src="../js/modernizr.custom.js"></script>
		<script src="https://use.typekit.net/upl5bju.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<meta property="fb:admins" content="1013490366" />
		
		<script type="text/javascript">
		window.sendinblue=window.sendinblue||[];window.sendinblue.methods=["identify","init","group","track","page","trackLink"];window.sendinblue.factory=function(e){return function(){var t=Array.prototype.slice.call(arguments);t.unshift(e);window.sendinblue.push(t);return window.sendinblue}};for(var i=0;i<window.sendinblue.methods.length;i++){var key=window.sendinblue.methods[i];window.sendinblue[key]=window.sendinblue.factory(key)}window.sendinblue.load=function(){if(document.getElementById("sendinblue-js"))return;var e=document.createElement("script");e.type="text/javascript";e.id="sendinblue-js";e.async=true;e.src=("https:"===document.location.protocol?"https://":"http://")+"s.sib.im/automation.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)};window.sendinblue.SNIPPET_VERSION="1.0";window.sendinblue.load();window.sendinblue.client_key="vydzit7vzp5a1uvzzz9la";window.sendinblue.page();
		</script>
		
		
	</head>
	<body>
		
		<div class="wrap">
			<a href="/" class="back">Retour à l'accueil</a>
			<header class="header clearfix">
				<h1><span>#StopHS</span>Harcèlement sexuel&nbsp;:<br/>interpellez les grandes entreprises</h1>
				<h2>Les violences sexuelles contre les&nbsp;femmes<br/>ont lieu aussi au&nbsp;travail. Demandez aux plus grands employeurs de France de réagir !</h2>
			</header>
			
			<div class="clearfix"></div>
			
			
			<?php
				$json_file = file_get_contents("data.json");
				$data = json_decode($json_file);
				$n = 0;
				foreach ($data as $name => $value) {
					foreach ($value as $entry) {
						$n++;
						echo '<article class="corp" data-name="'.$entry->name.'">';
						echo '<a href="https://twitter.com/home?status=';
						echo rawurlencode(".@".$entry->username.", ".$entry->estimated_emp." ".$entry->type." ont déjà été victimes de harcèlement sexuel chez vous. Vous réagissez ? #StopHS http://stophs.fr");
						echo '" target="_blank">';
						echo '<img src="http://avatars.io/twitter/'.$entry->username.'/?size=large" />';
						echo '<div class="clearfix"></div>';
						echo '<h4>'.$entry->name.'</h4>';
						echo $entry->estimated_emp." ".$entry->type." déjà victimes de harcèlement sexuel";
						echo "</a>";
						echo "</article>";
					}
				}
			?>
	
		</div>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="main.js"></script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-71326880-4', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>
</html>