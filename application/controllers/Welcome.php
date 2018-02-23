<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	function __construct() {
		parent::__construct();
		$this->load->model('m_data');
	}
	public function index()
	{
		$this->cek_sessiontrue();
		$this->load->view('home');
	}
	function tambah_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
			);
		$this->m_data->input_data($data, 'user');
		redirect('welcome');
	}
	public function cari()
	{
		$rute_from = $this->input->get('rute_from');
		$rute_to = $this->input->get('rute_to');
		$data = array(
			'data_rute' => $this->m_data->tampilrute("where rute_from LIKE '%$rute_from' AND rute_to LIKE '%$rute_to%'")->result_array(),
			);
	$this->load->view('cari', $data);
	}

	public function cek_sessiontrue(){
    	$sesion = $this->session->status;
    	if(!empty($sesion)){ 
    	  	redirect(base_url().'admin_con');
    	}
    }
    public function cek_session(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
    	  	return 0;
    	}else{
    		return 1;
    	}
  	}
    public function cek_sessionfalse(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
      		redirect(base_url().'welcome');
         }
     }
}
