<?php echo $header; ?>

<section class="content">
	<article>
		<h1>Hello. Willkommen. Bonjour. Cześć.</h1>

		<p>Jeśli szukasz naprawdę lekkiego skryptu pod blog, to dobrze trafiłeś. Wypełnij wszystkie pola i wystartuj ze swoją stroną.</p>
	</article>

	<form method="post" action="<?php echo uri_to('start'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="lang">
					<strong>Język</strong>
					<span class="info">Wybierz język</span>
				</label>
				<select id="lang" name="language">
					<?php foreach($languages as $lang): ?>
					<?php $selected = in_array($lang, $prefered_languages) ? ' selected' : ''; ?>
					<option<?php echo $selected; ?>><?php echo $lang; ?></option>
					<?php endforeach; ?>
				</select>
			</p>

			<p>
				<label for="timezone">
					<strong>Strefa czasowa</strong>
					<span class="info">Wybierz strefę czasową</span>
				</label>
				<select id="timezone" name="timezone">
					<?php $set = false; ?>
					<?php foreach($timezones as $zone): ?>
					<?php $selected = ($set === false and $current_timezone == $zone['offset']) ? ' selected' : ''; ?>
					<option value="<?php echo $zone['timezone_id']; ?>"<?php echo $selected; ?>>
						<?php echo $zone['label']; ?>
					</option>
					<?php if($selected) $set = true; ?>
					<?php endforeach; ?>
				</select>
			</p>
		</fieldset>

		<section class="options">
			<button type="submit" class="btn">Następny krok &raquo;</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>
