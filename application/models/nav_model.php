<?php
class nav_model extends CI_Model {

	function getNav() {
		if(isset($_SESSION['acces'])){

			$private = $_SESSION['acces'];
			$query = $this->db->query ("
					SELECT * from nav
					INNER JOIN acces ON
					nav.acces_id = acces.acces_id
					where acces.acces_id >= '$private'
					");
		}
		else{
			$query = $this->db->query ("SELECT * from nav INNER JOIN acces ON nav.acces_id = acces.acces_id where acces.acces_id='3'");
		}
		$result = $query->result ();
		return $result;

	}
}