<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends KK_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ( $this->islogin ) {
			$data['status'] = $this->session->userdata('status');
			$data['allUser'] = $this->m_user->getAllUser();
			$this->renderpage('user',$data);
		}else{
			redirect('/');
		}
	}

	public function addNew()
	{
		if ( $this->islogin ) {

			$nama = $this->input->post('nama', TRUE);
			if ( $nama == ""){
				$data['user'] = '';
				$this->renderpage('user-new',$data);
			}else{
				$id = $this->m_user->addNew();
				redirect('index.php/user/editUser/'.$id);
			}
		}else{
			redirect('/');
		}
	}

	public function editUser($id) {
		$id_post = $this->input->post('id', TRUE);
		if ( $id_post == ""){
			$user = $this->m_user->getUser($id);
			$data['user'] = $user;
			$this->renderpage('user-new',$data);
		}else{
			$id = $this->m_user->updateUser();
			redirect('index.php/user/editUser/'.$id);
		}
	}

	public function detailUser($id) {
		
		if ( $id != ""){
			$user = $this->m_user->getUser($id);
			$data['user'] = $user;
			$this->renderpage('user-detail',$data);
		}else{
			redirect('/');
		}
	}

	public function deleteUser($id) {
		
		$this->m_user->deleteUser($id);
		redirect('index.php/user');
	}

}