<?php

defined('BASEPATH') or exit('no direct script access');
/**
* 
*/
class Login extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('m_data');
	}

	function index()
	{
		$this->cek_sessiontrue();
		$this->load->view('login');
	}
	public function signin(){
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => $this->input->post('password', TRUE),
			);

		$hasil = $this->m_data->GetData($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['fullname'] = $sess->fullname;
				$sess_data['level'] = $sess->level;
				$sess_data['status'] = 'login';
			}
			$this->session->set_userdata($sess_data);
				redirect(base_url().'admin_con');
		}
		else {
			$info='<div style="color:red">PERIKSA KEMBALI NIK DAN PASSWORD ANDA!</div>';
			$this->session->set_userdata('info',$info);

			redirect(base_url().'welcome');

		}
	}
	function logout(){
		$this->session->session_destroy();
		redirect(base_url('welcome'));
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
