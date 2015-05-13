<?php echo $header; ?>

<section class="content">

	<article>
		<h1>Twoje pierwsze konto</h1>

		<p>Jesteśmy już blisko! Wszystko, czego teraz potrzebujemy to nazwa użytkownika i hasło, aby zalogować się do panelu administracyjnego.</p>
	</article>

	<form method="post" action="<?php echo uri_to('account'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="username">Nazwa użytkownika</label>
				<i>Użyj tego, aby się zalogować.</i>
				<input tabindex="1" id="username" name="username" value="<?php echo Input::previous('username', 'admin'); ?>">
			</p>

			<p>
				<label for="email">Adres email</label>
				<i>Potrzebne, jeśli nie możesz się zalogować.</i>

				<input tabindex="2" id="email" type="email" name="email" value="<?php echo Input::previous('email'); ?>">
			</p>

			<p>
				<label>Hasło</label>
				<i>Pamiętaj, aby stworzyć trudne hasło.</i>
				<input tabindex="3" name="password" type="password" value="<?php echo Input::previous('password'); ?>">
			</p>
		</fieldset>

		<section class="options">
			<a href="<?php echo uri_to('metadata'); ?>" class="btn quiet">&laquo; Poprzedni krok</a>
			<button type="submit" class="btn">Koniec</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>
