<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Instalacja Anchor CMS</title>
		<meta name="robots" content="noindex, nofollow">

		<link rel="stylesheet" href="<?php echo asset('views/assets/css/install.css'); ?>">
	</head>
	<body>

    	<nav>
			<img src="<?php echo asset('views/assets/img/logo.png'); ?>">

			<ul>
				<li class="start database metadata account complete">Język i strefa czasowa</li>
				<li class="database metadata account complete">Ustawienia bazy danych</li>
				<li class="metadata account complete">Ustawienia strony</li>
				<li class="account complete">Twoje konto</li>
				<li class="complete">Koniec</li>
			</ul>
		</nav>

		<script>
			(function(w, d, u) {
				var parts = "<?php echo Uri::current(); ?>".split('/'), url = parts.pop(), li = d.getElementsByClassName(url);
				if(url == 'complete') d.body.parentNode.className += 'small';
				for(var i = 0; i < li.length; i++) li[i].className += ' elapsed';
			}(window, document));
		</script>
