<?php namespace System\Response;

/**
 * Nano
 *
 * Just another php framework
 *
 * @package		nano
 * @link		http://madebykieron.co.uk
 * @copyright	http://unlicense.org/
 */

use System\Request;

class Status {

	/**
	 * The status code
	 *
	 * @var int
	 */
	public $status;

	/**
	 * The server protocol
	 *
	 * @var string
	 */
	public $protocol;

	/**
	 * Array or possible server status responses
	 *
	 * @var array
	 */
	public $messages = array(
		100 => 'Kontynuować',
		101 => 'Włączanie protokołów',
		200 => 'OK',
		201 => 'Utworzony',
		202 => 'Zaakceptowany',
		203 => 'Nieautoryzowana informacja',
		204 => 'Brak zawartości',
		205 => 'Reset zawartości',
		206 => 'Częściowe zawartości',
		207 => 'Status',
		300 => 'Wielokrotny wybór',
		301 => 'Przenosiny na stałe',
		302 => 'Znaleziono',
		303 => 'Zobacz inne',
		304 => 'Niemodyfikowane',
		305 => 'Stosowanie proxy',
		307 => 'Przekierowanie tymczasowe',
		400 => 'Złe zapytanie',
		401 => 'Nieautoryzowane',
		402 => 'Zapłata wymagana',
		403 => 'Zakazany',
		404 => 'Nie znaleziono',
		405 => 'Niedozwolona metoda',
		406 => 'Brak akceptacji',
		407 => 'Wymagane uwierzytelnienie proxy',
		408 => 'Limit czasu żądania',
		409 => 'Konflikt',
		410 => 'Stracony',
		411 => 'Wymagana długość',
		412 => 'Warunek niespełniony',
		413 => 'Zbyt duże żądanie',
		414 => 'Zbyt duże zapytanie URI',
		415 => 'Nieobsługiwany typ odnośnika',
		416 => 'Prośba o zasięg nie spełniona',
		417 => 'Niepowodzenie oczekiwania',
		422 => 'Nie da się przetworzyć',
		423 => 'Zamknięty',
		424 => 'Niepowodzenie',
		500 => 'Wewnętrzny błąd serwera',
		501 => 'Nie zaimplementowano',
		502 => 'Zła brama',
		503 => 'Serwis niedostępny',
		504 => 'Limit czasu bramy',
		505 => 'Wersja HTTP nie jest wspierana',
		507 => 'Niewystarczający bagaż',
		509 => 'Przekroczono limit transferu'
	);

	/**
	 * Create an instance or the Status class for chaining
	 *
	 * @param int
	 * @return object
	 */
	public static function create($status = 200) {
		return new static($status);
	}

	/**
	 * Create an instance or the Status class
	 *
	 * @param int
	 */
	public function __construct($status = 200) {
		$this->status = $status;
		$this->protocol = Request::protocol();
	}

	/**
	 * Send the status header
	 */
	public function header() {
		// status message
		$message = $this->messages[$this->status];

		// for fastcgi we have to send a status header like so:
		// http://php.net/manual/en/function.header.php
		if(strpos(PHP_SAPI, 'cgi') !== false) {
			header('Status: ' . $this->status . ' ' . $message);
		}
		// overwise we just send a normal status header
		else {
			header($this->protocol . ' ' . $this->status .  ' ' . $message);
		}
	}

}
