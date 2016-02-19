<?php  if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class m_Pesanan extends CI_Model
{

    public function __construct() {
        
    }

    public function imagename($filename){
        if(!ini_get('date.timezone'))
        {
            date_default_timezone_set('GMT');
        }

        $char = 'ea011088ddc8b17e619322202f1f177d';
        $pswd = sha1(sha1($char) . date('Y-m-d H:i:s'));
        $newpwd = substr($pswd, 10, 20);
        $newName = substr($newpwd, 0,10);
        return $newName;
    }

    public function addNew()
    {
        date_default_timezone_set("Asia/Jakarta");
        $user = $this->input->post('user');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $tgl_pesan = date("Y-m-d H:i:s");
        $tgl_jadi = $this->input->post('tgl_jadi');
        $keterangan = $this->input->post('keterangan');
        $status = '1';
        $gambar = $this->input->post('gambar');

        // Jumlah harga
        $jml_ko_panjang = $this->input->post('jml_ko_panjang');
        $harga_ko_panjang = $this->input->post('harga_ko_panjang');
        $jml_ko_pendek = $this->input->post('jml_ko_pendek');
        $harga_ko_pendek = $this->input->post('harga_ko_pendek');
        $jml_kk_panjang = $this->input->post('jml_kk_panjang');
        $harga_kk_panjang = $this->input->post('harga_kk_panjang');
        $jml_kk_pendek = $this->input->post('jml_kk_pendek');
        $harga_kk_pendek = $this->input->post('harga_kk_pendek');
        $jml_ka = $this->input->post('jml_ka');
        $harga_ka = $this->input->post('harga_ka');

        $arrsJml = array(
                'jml_ko_panjang' => $jml_ko_panjang,
                'harga_ko_panjang' => $harga_ko_panjang,
                'jml_ko_pendek' => $jml_ko_pendek,
                'harga_ko_pendek' => $harga_ko_pendek,
                'jml_kk_panjang' => $jml_kk_panjang,
                'harga_kk_panjang' => $harga_kk_panjang,
                'jml_kk_pendek' => $jml_kk_pendek,
                'harga_kk_pendek' => $harga_kk_pendek,
                'jml_ka' => $jml_ka,
                'harga_ka' => $harga_ka,
            );

        $serArrs = serialize($arrsJml);

        // $id = substr(md5($nama.substr(md5(date("Y-m-d H:i:s")), 5, 15)),5,10);

        $data = array(
            'user' => $user,
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'jumlah_harga' => $serArrs,
            'tgl_pesan' => $tgl_pesan,
            'tgl_jadi' => $tgl_jadi,
            'gambar' => $gambar,
            'keterangan' => $keterangan,
            'status' => $status
        );

        $this->db->insert('hb_pesanan', $data);
        return $id;
    }

    public function updatePesanan(){
        date_default_timezone_set("Asia/Jakarta");
        $id = $this->input->post('id');
        $user = $this->input->post('user');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $tgl_pesan = date("Y-m-d H:i:s");
        $tgl_jadi = $this->input->post('tgl_jadi');
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status');
        $gambar = $this->input->post('gambar');

        // Jumlah harga
        $jml_ko_panjang = $this->input->post('jml_ko_panjang');
        $harga_ko_panjang = $this->input->post('harga_ko_panjang');
        $jml_ko_pendek = $this->input->post('jml_ko_pendek');
        $harga_ko_pendek = $this->input->post('harga_ko_pendek');
        $jml_kk_panjang = $this->input->post('jml_kk_panjang');
        $harga_kk_panjang = $this->input->post('harga_kk_panjang');
        $jml_kk_pendek = $this->input->post('jml_kk_pendek');
        $harga_kk_pendek = $this->input->post('harga_kk_pendek');
        $jml_ka = $this->input->post('jml_ka');
        $harga_ka = $this->input->post('harga_ka');

        $arrsJml = array(
                'jml_ko_panjang' => $jml_ko_panjang,
                'harga_ko_panjang' => $harga_ko_panjang,
                'jml_ko_pendek' => $jml_ko_pendek,
                'harga_ko_pendek' => $harga_ko_pendek,
                'jml_kk_panjang' => $jml_kk_panjang,
                'harga_kk_panjang' => $harga_kk_panjang,
                'jml_kk_pendek' => $jml_kk_pendek,
                'harga_kk_pendek' => $harga_kk_pendek,
                'jml_ka' => $jml_ka,
                'harga_ka' => $harga_ka,
            );

        $serArrs = serialize($arrsJml);

        $data = array(
            'user' => $user,
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'jumlah_harga' => $serArrs,
            'tgl_pesan' => $tgl_pesan,
            'tgl_jadi' => $tgl_jadi,
            'gambar' => $gambar,
            'keterangan' => $keterangan,
            'status' => $status
        );

        $this->db->where('id',$id);
        $this->db->update('hb_pesanan', $data);
        return $id;
    }

    public function getPesanan($id="") {
        
        $this->db->select("*, pesan.id as id_pesanan, pesan.nama as nama_pemesan, user.id as id_user, user.nama as nama_user, pesan.status as status_pemesan, user.status as status_user");
        $this->db->from("hb_pesanan as pesan");
        $this->db->join("hb_user as user", 'pesan.user = user.id');

        if ($id != "") {
            $this->db->where("pesan.id", $id);
            $this->db->order_by('pesan.tgl_pesan', 'ASC');
            $query=$this->db->get();
            return $query->row();
        }else{
            $this->db->order_by('pesan.tgl_pesan', 'ASC');
            $query=$this->db->get();
            return $query->result();
        }
    }

    public function getPesananStatus($status) {
        
        $this->db->select("*, pesan.id as id_pesanan, pesan.nama as nama_pemesan, user.id as id_user, user.nama as nama_user, pesan.status as status_pemesan, user.status as status_user");
        $this->db->from("hb_pesanan as pesan");
        switch ($status) {
            case '1':
                $this->db->where('pesan.status','1');
            break;
            case '2':
                $this->db->where('pesan.status','2');
            break;
            case '3':
                $this->db->where('pesan.status','3');
            break;
        }
        $this->db->join("hb_user as user", 'pesan.user = user.id');
        $this->db->order_by('pesan.tgl_pesan', 'ASC');
        $query=$this->db->get();
        return $query->result();
    }

    public function getPesananTgl($tgl_awal, $tgl_akhir) {
        
        $this->db->select("*, pesan.id as id_pesanan, pesan.nama as nama_pemesan, user.id as id_user, user.nama as nama_user, pesan.status as status_pemesan, user.status as status_user");
        $this->db->from("hb_pesanan as pesan");
        $this->db->join("hb_user as user", 'pesan.user = user.id');
        $this->db->where('pesan.tgl_pesan >=', $tgl_awal);
        $this->db->where('pesan.tgl_pesan <=', $tgl_akhir);

        $this->db->order_by('pesan.tgl_pesan', 'ASC');
        $query=$this->db->get();
        return $query->result();
    }

    public function deletePesanan($id) {
        $this->db->delete('hb_pesanan', array('id' => $id));
        return true;
    }

    public function updateStatusPesanan($id,$status){

        $data = array(
            'status' => $status
        );

        $this->db->where('id',$id);
        $this->db->update('hb_pesanan', $data);
        return $id;
    }
}
