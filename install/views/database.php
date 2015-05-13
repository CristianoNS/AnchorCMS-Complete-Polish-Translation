<?php echo $header; ?>

<section class="content">
	<article>
		<h1>Twoja baza danych</h1>

		<p>Po pierwsze, musisz mieć bazę danych. Anchor przechowuje w niej wszystkie informacje, dlatego ważne jest, aby wypełnić poniższe pola prawidłowo.</p>
	</article>

	<form method="post" action="<?php echo uri_to('database'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="host">Host bazy danych</label>
				<input id="host" name="host" value="<?php echo Input::previous('host', '127.0.0.1'); ?>">

				<i>Przeważnie jest to <b>localhost</b> lub <b>127.0.0.1</b>.</i>
			</p>

			<p>
				<label for="port">Port</label>
				<input id="port" name="port" value="<?php echo Input::previous('port', '3306'); ?>">

				<i>Zazwyczaj <b>3306</b>.</i>
			</p>

			<p>
				<label for="user">Nazwa użytkownika</label>
				<input id="user" name="user" value="<?php echo Input::previous('user', 'root'); ?>">

				<i>Nazwa użytkownika bazy danych.</i>
			</p>

			<p>
				<label for="pass">Hasło</label>
				<input id="pass" name="pass" value="<?php echo Input::previous('pass'); ?>">

				<i>Pozostaw puste, jeśli nie ma hasła.</i>
			</p>

			<p>
				<label for="name">Nazwa bazy danych</label>
				<input id="name" name="name" value="<?php echo Input::previous('name', 'anchor'); ?>">

				<i>Nazwa twojej bazy danych.</i>
			</p>

			<p>
				<label for="prefix">Prefix tabel</label>
				<input id="prefix" name="prefix" value="<?php echo Input::previous('prefix', 'anchor_'); ?>">

				<i>Nazwa prefixów w bazie danych.</i>
			</p>

			<p>
				<label for="collation">Kodowanie</label>
				<select id="collation" name="collation">
					<?php foreach($collations as $code => $collation): ?>
					<?php $selected = ($code == Input::previous('collation', 'utf8_general_ci')) ? ' selected' : ''; ?>
					<option value="<?php echo $code; ?>" <?php echo $selected; ?>>
						<?php echo $code; ?>
					</option>
					<?php endforeach; ?>
				</select>

				<i>Przeważnie jest to <b>utf8_general_ci</b>.</i>
			</p>
		</fieldset>

		<section class="options">
			<a href="<?php echo uri_to('start'); ?>" class="btn quiet">&laquo; Poprzedni krok</a>
			<button type="submit" class="btn">Następny krok &raquo;</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>
