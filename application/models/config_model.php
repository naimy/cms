<?php
class config_model extends CI_Model {

    function getTitle() {
        $query = $this->db->query ("SELECT * FROM config where id_config = 1");
        $result = $query->result ();
        return $result;
    }

    function modifyTitle($value) {
        $query = $this->db->query ("UPDATE config SET value = '$value' WHERE id_config = 1");
    }

    function getAllConfig() {
    	$query = $this->db->query ("select * from config");
    	$result = $query->result ();
    	return $result;
    }

    function updateData($data) {
    	var_dump($data);

    	$ts3 = $data['adresse_Ts'];
    	$transmission = $data['adresse_Transmission'];
    	$webmin = $data['adresse_Webmin'];
    	$plex = $data['adresse_Plex'];
    	$server = $data['adresse_Server'];

    	$query = $this->db->query ("
    			UPDATE config
    			SET value = '$ts3'
    			WHERE id_config  = '2'");

    	$query = $this->db->query ("
    			UPDATE config
    			SET value = '$transmission'
    			WHERE id_config  = '3'");

    	$query = $this->db->query ("
    			UPDATE config
    			SET value = '$webmin'
    			WHERE id_config  = '6'");

    	$query = $this->db->query ("
    			UPDATE config
    			SET value = '$plex'
    			WHERE id_config  = '4'");

    	$query = $this->db->query ("
    			UPDATE config
    			SET value = '$server'
    			WHERE id_config  = '5'");
    }
}