<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
	public function index()
	{
		$this->template->load('MasterLayout','Home/Beranda');
	}

	public function form()
	{
		$this->template->load('MasterLayout','Home/form');
	}
}