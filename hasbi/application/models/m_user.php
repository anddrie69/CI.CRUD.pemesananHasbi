<?php  if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class m_User extends CI_Model
{
    public function getUser($id){
        $this->db->select("*");
        $this->db->from("hb_user");
        $this->db->where("id" , $id);
        $query=$this->db->get();
        return $query->row();
    }

    public function getAllUser(){
        $this->db->select("*");
        $this->db->from("hb_user");

        $query=$this->db->get();
        return $query->result();
    }

    function dologin()
    {
        $username = $this->input->post('username' , true);
        $pass = $this->input->post('password' , true);
        $pwd = $this->generatepassword($pass);

        $this->db->select('id, nama, username, status');
        $this->db->where('username', $username);
        $this->db->where('password', $pwd);
        $query = $this->db->get('hb_user');
        $res = $query->row();

        if ( $query->num_rows() > 0 )
        {
            $this->session->set_userdata('is_logged_in', true);
            $this->session->set_userdata('id', $res->id);
            $this->session->set_userdata('nama', $res->nama);
            $this->session->set_userdata('username', $res->username);
            $this->session->set_userdata('status', $res->status);
            return true;
        }else {
            return false;
        }
    }

    function is_user_logout()
    {
        $this->session->sess_destroy();
        return true;
    }

    public function addNew()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->generatepassword($this->input->post('password'));
        $user_level = $this->input->post('user_level');

        $id = substr(md5($nama.substr(md5(date("Y-m-d H:i:s")), 5, 10)),5,10);

        $data = array(
            'id' => $id,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'status' => $user_level
        );
        $this->db->insert('hb_user', $data);
        return $id;
    }

    public function updateUser()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->generatepassword($this->input->post('password'));
        $user_level = $this->input->post('user_level');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'status' => $user_level
        );

        $this->db->where('id',$id);
        $this->db->update('hb_user', $data);
        return $id;
    }

    public function deleteUser($id) {
        $this->db->delete('hb_user', array('id' => $id));
        return true;
    }

    private function generatepassword($pass)
    {
        $password1 = md5($pass);
        $char = 'ea011088ddc8b17e619322202f1f177d';
        $password2 = sha1(sha1($char).$password1);
        return substr($password2,10,20);
    }

}
