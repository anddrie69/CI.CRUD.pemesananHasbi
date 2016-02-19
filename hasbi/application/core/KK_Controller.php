<?php  if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class KK_Controller extends CI_Controller{

	protected $islogin = false;
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('session');
		
		$this->load->model('m_analytic');
		$this->load->model('m_user');
		$this->load->model('m_pesanan');

		$this->islogin = $this->session->userdata('is_logged_in');
		$this->email = $this->session->userdata('email');

	}
	function renderpage($view, $datas = array()){
		
		$data['title_web'] = '';
		$data['nama'] = $this->session->userdata('nama');
		$data['status'] = $this->session->userdata('status');
		$data['id_user'] = $this->session->userdata('id');

		$this->load->view('core/head',$data);
		$this->load->view('core/header',$data);
		$this->load->view('core/sidebar',$data);
		$this->load->view($view, $datas);
		$this->load->view('core/footer');
	}
}