<?php

if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
class Site extends CI_Controller {

    public function index() {

        session_start ();
        $this->load->helper ( 'url' );
        $this->load->database ();

        if (isset ( $_SESSION ['login'] )) {
            $connexion = true;
        } else {
            $connexion = false;
        }

        $this->load->model ( 'nav_model' );
        $this->load->model ( 'config_model' );

        try {

            $responses = $this->nav_model->getNav ();
            $title = $this->config_model->getTitle ();
            $adress = $this->config_model->getAllConfig ();

        } catch ( Exception $exception ) {

        }

        $data = array (
            'connexion' => $connexion,
            'nav' => $responses,
            'title' => $title[0]->value
        );

        $dataSite = array (
            'title' => $title[0]->value,
        	'adress' => $adress
        );

        $this->load->model ( 'login_model' );
        $logged = $this->login_model->getLogged ();
        $names = "";
        for($i=0;$i<count($logged);$i++){
        	$names = $names . $logged[$i]->name . "  ";
        }
        $dataLogged = array (
        		'names' => $names
        );

        $this->load->view ( 'common/header', $data );
        $this->load->view ( 'site', $dataSite );
        $this->load->view ( 'common/footer' , $dataLogged);

    }

    public function updateInfo() {

    	$this->load->helper ( 'url' );
    	$baseurl = site_url ();
    	$this->load->database ();
		$data = array (
				"adresse_Ts" => $_POST ['ts3'],
				"adresse_Webmin" => $_POST ['webmin'],
				"adresse_Plex" => $_POST ['plex'],
				"adresse_Transmission" => $_POST ['transmission'],
				"adresse_Server" => $_POST ['server']
		);
		$this->load->database ();
		$this->load->model('config_model');
		$this->config_model->updateData($data);
		header ( 'Location:' . $baseurl . "index.php/site?sucess=1" );

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */