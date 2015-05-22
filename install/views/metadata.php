<?php echo $header; ?>

<section class="content">
	<article>
		<h1>Ustawienia strony</h1>

		<p>Spersonalizuj swój blog.</p>
	</article>

	<form method="post" action="<?php echo Uri::to('metadata'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="site_name">Nazwa strony</label>
				<i>Naswój swój blog</i>

				<input id="site_name" name="site_name" value="<?php echo Input::previous('site_name', 'Mój Anchor Blog'); ?>">
			</p>

			<p>
				<label for="site_description">Opis strony</label>
				<i>Opisz swój blog</i>

				<textarea id="site_description" name="site_description"><?php echo Input::previous('site_description',
					'To nie jest zwykły blog - to Anchor blog'); ?></textarea>
			</p>

			<p>
				<label for="site_path">Ścieżka strony</label>
				<i>Folder z plikami. Zmień, jeśli jest błędna.</i>
				<input id="site_path" name="site_path" value="<?php echo Input::previous('site_path', $site_path); ?>">
			</p>

			<?php if(count($themes) > 1): ?>
			<p>
				<label for="theme">Motyw</label>
				<i>Motyw twojego bloga</i>
				<select id="theme" name="theme">
					<?php foreach($themes as $dir => $theme): ?>
					<option value="<?php echo $dir; ?>"><?php echo $theme['name']; ?> by <?php echo $theme['author']; ?></option>
					<?php endforeach; ?>
				</select>
			</p>
			<?php else: $theme = key($themes); ?>
			<input name="theme" type="hidden" value="<?php echo $theme; ?>">
			<?php endif; ?>

			<p>
				<label for="rewrite">Czyste URL</label>
				<i>Przepisywanie URL</i>

			<?php if(mod_rewrite()): ?>

				<div class="more">Wygląda na to, że używasz Apache z włączonym <code>mod_rewrite</code>.<br>
				Instalator utworzy za ciebie plik htaccess.</div>

			<?php elseif(is_apache()): ?>

				<div class="more">Wygląda na to, że używasz Apache, ale <code>mod_rewrite</code> jest wyłączone.</div>

				<div class="more"><input id="rewrite" name="rewrite" type="checkbox" value="1">
				Stwórz plik htaccess.</div>

			<?php elseif(is_cgi()): ?>

				<div class="more">Wygląda na to, że używasz <code>PHP</code> jako proces fastcgi.<br>
				Będziesz musiał własnoręcznie skonfigurować przepisywanie URL.</div>

			<?php endif; ?>
			</p>
		</fieldset>

		<section class="options">
			<a href="<?php echo uri_to('database'); ?>" class="btn quiet">&laquo; Poprzedni krok</a>
			<button type="submit" class="btn">Następny krok &raquo;</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>
