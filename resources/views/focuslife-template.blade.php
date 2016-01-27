<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Focuslife Accueil</title>
		<!--<link href="css/css-HP.css" rel="stylesheet" type="text/css">-->
		@yield('css')
	</head>
	
	<!-- *********************************************************************** -->
	<!-- *********************************************************************** -->
	<!-- ***************************    BODY    ******************************** -->
	<!-- *********************************************************************** -->
	<!-- *********************************************************************** -->
	<body>
	
	<!-- **************************    HEADER    ******************************* -->
		<div id="sn_header">
			<div class="social_network" id="facebook">
				<img src="/v0.1/trunk/public/pictures/Facebook_logo.png" alt="facebook_logo.png" />
			</div>

			<div class="social_network" id="twitter">
				<img src="/v0.1/trunk/public/pictures/Twitter_logo.png" alt="Twitter_logo.png" />
			</div>

			<!-- <div class="social_network" id="instagram">
				<p> F </p>
			</div> -->
		</div>

		<div id="header">
			<a href="/v0.1/trunk/public/accueil">
			<img src="/v0.1/trunk/public/pictures/focuslife_logo.png" alt="focuslife_logo.png" />
			</a>
		</div>
		
	<!-- ***************************    MENU    ******************************** -->
		<div id="menu">
			<div id="navigation">
				<li class="{{ Request::path() == 'news' ? 'active' : 'item' }}" id="menu_actualités"> 
					<span>
						<a href="/v0.1/trunk/public/news">ACTUALITES</a>
					</span>
				</li>
				<li class="{{ Request::path() == 'dossier' ? 'active' : 'item' }}" id="menu_dossiers">
					<span>
						<a href="/v0.1/trunk/public/dossier">DOSSIERS</a>
					</span>
				</li>
				<li class="{{ Request::path() == 'inprogress' ? 'active' : 'item' }}" id="menu_glossaire">
					<span>
						<a href="/v0.1/trunk/public/inprogress">GLOSSAIRE</a>
					</span>
				</li>
				<li class="{{ Request::path() == 'inprogress' ? 'active' : 'item' }}" id="menu_qui-sommes-nous">
					<span>
						<a href="/v0.1/trunk/public/inprogress">QUI-SOMMES-NOUS</a>
					</span>
				</li>
				<li class="{{ Request::path() == 'contact' ? 'active' : 'item' }}" id="menu_contact">
					<span>
						<a href="/v0.1/trunk/public/contact">CONTACT</a>
					</span>
				</li>
			</div>
		</div>
		
	<!-- **************************    STICKER    ****************************** -->
		@yield('content')
		
	<!-- **************************    FOOTER    ******************************* -->
		<div id="footer">
			<div id="box_footer">
				<div id="footer_logo">
					<img src="/v0.1/trunk/public/pictures/focuslife_logo_blanc.png" alt="focuslife_logo_blanc.png" />
				</div>
				<div id="copyright">
					<p>Copyright @ 2015 Tous droits réservés</p>
				</div>
			</div>
		</div>

	</body>
	
	<!-- *********************************************************************** -->
	<!-- *********************************************************************** -->
	<!-- *************************   FIN BODY   ******************************** -->
	<!-- *********************************************************************** -->
	<!-- *********************************************************************** -->
	
</html>