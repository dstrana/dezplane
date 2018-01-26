<?php
class Crud extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_data');
	}

	function index () {
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
	function tambah(){
		$this->load->view('user');
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
		redirect('crud/index');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'user');
		redirect('crud/index');
	}
	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where, 'user')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
		$nama = $this->input->post('username');
		$pwd = $this->input->post('password');
		$id = $this->input->post('id');

		$data = array(
			'username' => $nama,
			'password' => $pwd );
		$where = array('id' => $id );

		$this->m_data->update_data($where,$data,'user');
		redirect('crud/index');
	}

	function tambah_reserv(){
		$this->load->view('v_inputr');

	}

	function indexr(){
		$data['reservation'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_reserv',$data);
	}
}