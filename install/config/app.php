<?php

return array(
	'url' => dirname($_SERVER['SCRIPT_NAME']),
	'index' => 'index.php?route=',
	'timezone' => 'UTC',
	'key' => hash('md5', 'Anchor Installer ' . VERSION),
	'language' => 'pl_PL',
	'encoding' => 'UTF-8'
);
