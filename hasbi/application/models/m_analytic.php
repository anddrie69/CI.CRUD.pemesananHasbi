<?php  if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class m_Analytic extends CI_Model
{
	
	public function countPesananStatus($status){
		$this->db->select("COUNT(*) as count_pesanan");
		$this->db->from("hb_pesanan");
		switch ($status) {
			case '1':
				$this->db->where('status','1');
			break;
			case '2':
				$this->db->where('status','2');
			break;
			case '3':
				$this->db->where('status','3');
			break;
			case '0':
			break;
		}
		$query=$this->db->get();
        return $query->row();
	}
}