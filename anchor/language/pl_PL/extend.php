<?php

return array(

	'extend' => 'Dodatki',

	'fields' => 'Dodatkowe pola',
	'fields_desc' => 'Utwórz dodatkowe pole',

	'variables' => 'Zmienne',
	'variables_desc' => 'Utwórz zmienną z kodem',

	'create_field' => 'Utwórz dodatkowe pole',
	'editing_custom_field' => 'Edytujesz: &ldquo;%s&rdquo;',
	'nofields_desc' => 'Brak dodatkowych pól',

	'create_variable' => 'Utwórz zmienną',
	'editing_variable' => 'Edytujesz: &ldquo;%s&rdquo;',
	'novars_desc' => 'Brak zmiennych',

	// form fields
	'type' => 'Przeznaczenie',
	'type_explain' => 'Wybierz, gdzie chcesz utworzyć dodatkowe pole',

	'field' => 'Pole',
	'field_explain' => 'Wybierz typ pola',

	'key' => 'Unikalny klucz',
	'key_explain' => 'Podaj unikalny klucz do pola',
	'key_missing' => 'Podaj unikalny klucz do pola',
	'key_exists' => 'Taki klucz już istnieje',

	'label' => 'Nazwa',
	'label_explain' => 'Podaj nazwę dla Twojego pola',
	'label_missing' => 'Podaj nazwę pola',

	'attribute_type' => 'Rodzaj plików',
	'attribute_type_explain' => 'Podaj po przecinku dozwolone typy plików lub pozostaw puste pole, aby zezwolić na wszystkie typy plików',

	// images
	'attributes_size_width' => 'Maksymalna. szerokość',
	'attributes_size_width_explain' => 'Zdjęcie zostanie zmniejszone jeżeli jest większe od podanej wartości',

	'attributes_size_height' => 'Maksymalna wysokość',
	'attributes_size_height_explain' => 'Zdjęcie zostanie zmniejszone jeżeli jest większe od podanej wartości',

	// custom vars
	'name' => 'Nazwa',
	'name_explain' => 'Podaj unikalną nazwę zmiennej',
	'name_missing' => 'Podaj unikalną nazwę zmiennej',
	'name_exists' => 'Zmienna już istnieje',

	'value' => 'Wartość',
	'value_explain' => 'Wartość zmiennej (do 64kb)',
	'value_code_snipet' => 'Aby wyświetlić na stronie, dodaj kod do swojego szablonu:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Zmienna została dodana',
	'variable_updated' => 'Zmienna została zaktualizowana',
	'variable_deleted' => 'Zmienna została usunięta',

	'field_created' => 'Pole zostało dodane',
	'field_updated' => 'Pole zostało zaktualizowane',
	'field_deleted' => 'Pole zostało usunięte',

);
