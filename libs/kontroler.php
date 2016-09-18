<?php
class Kontroler {
	private $_model = NULL;
	private $_widok = NULL;
	
	public function __construct() {
		$this->_widok = new WidokTabela();
		$this->_model = new Model($this->_widok);
		
		if(isset($_GET['dodaj'])) {
			$seria = $_POST['s_seria'];
			$marka = $_POST['s_marka'];
			$kolor = $_POST['s_kolor'];
			
			$this->_model->dodaj(array(
				"seria" => $seria,
				"marka" => $marka,
				"kolor" => $kolor	
			));
		}
		else if(isset($_GET['usun'])) {
			$ktory = intval($_POST['sel_id']);
			
			$this->_model->usun($ktory);
		}
	}
	
	public function renderujWidok() {
		echo $this->_widok->renderuj();
	}
}