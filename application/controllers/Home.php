<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// CALL THE HEADER VIEW\
		$data['title'] = "UKM CYBER";
		$this->load->view('templates/header.php', $data);

		// CALL THE BODY VIEW
		$this->load->view('body/index.php');

		// CALL THE FOOTER VIEW
		$this->load->view('templates/footer.php');
	}
}
