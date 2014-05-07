<?php
class Login_model extends CI_Model {
	function getLogin($login, $password) {
		if ($login == "" || $password == "") {
			throw new Exception("Aucun login et / ou mot de passe"); // absence de mot de passe et / ou login
		} else {
			$login = mysql_real_escape_string ( $login );
			$query = $this->db->query ( "SELECT * from users INNER JOIN acces ON users.acces_id = acces.acces_id where login_user = '$login'" );
			$result = $query->result ();

			if (! empty ( $result )) {
				if ($result [0]->password_user == $password) {
					$query = $this->db->query ( "UPDATE users SET logged = '1' WHERE login_user = '$login'");
					return $result;
				} else {
					throw new Exception("Mauvais login et / ou mot de passe"); // mauvais mot de passe
				}
			} else {
				throw new Exception("Mauvais login et / ou mot de passe"); // mauvais login et / ou mot de passe
			}
		}
	}
	function Logout($id) {
		$query = $this->db->query ( "UPDATE users SET logged = '0' WHERE id_user = '$id'");
	}

	function getLogged() {
		$query = $this->db->query ( "SELECT name from users where logged = '1'");
		$result = $query->result ();
		return $result;
	}

}