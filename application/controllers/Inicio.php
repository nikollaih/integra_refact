<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends Application_Controller {
	public function index()
	{
		$this->load_layout("generales/index");
	}

	public function login(){
		$params["title"] = "Mezclas";
        $params["subtitle"] = "Mezclas";
        $this->load_layout("generales/auth/login", $params);
	}
}
