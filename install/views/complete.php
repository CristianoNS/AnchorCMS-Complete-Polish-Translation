<?php echo $header; ?>

<section class="content small">
	<h1>Instalacja zakończona!</h1>

	<?php if($htaccess): ?>
	<p class="code">Nie mogliśmy stworzyć pliku <code>htaccess</code>. Skopiuj poniższą treść i utwórz plik .htaccess w głównym folderze Anchor.
	<textarea id="htaccess"><?php echo $htaccess; ?></textarea></p>

	<script>document.getElementById('htaccess').select();</script>
	<?php endif; ?>

	<section class="options">
		<a href="<?php echo $admin_uri; ?>" class="button">Odwiedź panel admina</a>
		<a href="<?php echo $site_uri; ?>" class="right">Odwiedź twoją stronę</a>
	</section>
</section>

<?php echo $footer; ?>
