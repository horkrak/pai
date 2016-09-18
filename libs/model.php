<?php
session_start();

class Model {
	private $_dane;
	private $_widok;
	
	public function __construct($widok) {
		if(!isset($_SESSION['samochody'])) {
			$this->_dane = array(
				array(
					'marka' => "Peugeot",
					'seria' => "206",
					'kolor' => "żółty"	
				)
			);
			
			$_SESSION['samochody'] = json_encode($this->_dane);
		}
		else {
			$this->_dane = (array) json_decode($_SESSION['samochody']);
		}
		
		$this->_widok = $widok;
		$this->_widok->aktualizuj($this->_dane);
	}
	
	public function dodaj($rekord) {
		array_push($this->_dane, $rekord);
		$this->_widok->aktualizuj($this->_dane);
	}
	
	public function usun($ktory) {
		array_splice($this->_dane, $ktory, 1);
		$this->_widok->aktualizuj($this->_dane);
	}
	
	public function zmien($ktory, $naco) {
		array_replace($this->_dane[$ktory], $naco);
		$this->_widok->aktualizuj($this->_dane);
	}
}
?>