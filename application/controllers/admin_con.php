<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_con extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->model('m_data');
	}
	function hapususer($id){
		$this->cek_sessionfalse();
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'user');
		redirect('admin_con');
	}
	function tambahuser(){
		$this->load->view('tambahuser');
	}
	function updateuser(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
		$id = $this->input->post('id');

		$data = array(
			'username' => $username,
			'fullname' => $fullname,
			'level' => $level,
			'password' => $password );
		$where = array('id' => $id );

		$this->m_data->update_data($where,$data,'user');
		redirect('admin_con');
	}
	function saveuser(){
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
		redirect('admin_con');
	}
	function edituser($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where, 'user')->result();
		$this->load->view('edituser',$data);
	}
	public function index()
	{
		$this->cek_sessionfalse();
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('viewadmin', $data);
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
    public function logout(){
    	$this->session->sess_destroy();
    	redirect(base_url().'welcome');
     }
     	public function rute()
	{
		$this->cek_sessionfalse();
		$data['rute'] = $this->m_data->tampil_rute()->result();
		$this->load->view('rute/rute', $data);
	}
	function tambahrute(){
		$this->load->view('rute/tambahrute');
	}
	function saverute(){
		$depart_at = $this->input->post('depart_at');
		$arrival_at = $this->input->post('arrival_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$transit_place = $this->input->post('transit_place');
		$price = $this->input->post('price');
		$transportation_id = $this->input->post('transportation_id');

		$data = array(
			'depart_at' => $depart_at,
			'arrival_at' => $arrival_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'transit_place' => $transit_place,
			'price' => $price,
			'transportation_id' => $transportation_id
			);
		$this->m_data->input_data($data, 'rute');
		redirect('admin_con/rute');
	}
}
