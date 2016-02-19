<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends KK_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ( $this->islogin ) {
			redirect('index.php/home/dashboard');
		}else{
			$username = $this->input->post('username', TRUE);
			$password = $this->input->post('password', TRUE);
			
			if ( $username != "" && $password != "" ){
				if ( ! $this->m_user->dologin() ){
					$data['warning'] = '
						<div class="alert alert-danger alert-dismissable">
		                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
		                    Login gagal, tolong cek username dan password.
		                </div>';
					$this->load->view('login', $data);
				} else {
					redirect('index.php/pesanan/perhitunganTanggal');
				}
			}
			else {
				$datas['warning'] = "";
				$this->load->view('login', $datas);
			}
		}
	}

	function logout()
	{
		$this->m_user->is_user_logout();
		redirect('/');
	}

	public function dashboard()
	{
		$data['pesananSemua'] = $this->m_analytic->countPesananStatus('0');
		$data['pesananBaru'] = $this->m_analytic->countPesananStatus('1');
		$data['pesananDeadline'] = $this->m_analytic->countPesananStatus('2');
		$data['pesananSelesei'] = $this->m_analytic->countPesananStatus('3');

		$this->renderpage('home', $data);
	}
}