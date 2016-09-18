<?php
class WidokTabela {
	private $_html = "";
	
	public function aktualizuj($dane) {
		$this->kompiluj($dane);
	}
	
	private function kompiluj($dane) {
		/* przygotowuje reprezentację danych */
	
		$this->_html = "<table>
            <th>*</th><th>Marka</th><th>Seria</th><th>Kolor</th>
        ";
		
		$ile = 0;
		foreach($dane as $samochod) {	
			$samochod = (array) $samochod;
			
			$this->_html .= "<tr>
			<td><input type=\"radio\" name=\"sel_id\" value=\"$ile\"></td>
            <td>{$samochod['marka']}</td>
            <td>{$samochod['seria']}</td>
            <td>{$samochod['kolor']}</td>
            </tr>";
			
			$ile++;
		}
		
		$this->_html .= "</table>";
	}
	
	public function renderuj() {
		return $this->_html;
	}
}