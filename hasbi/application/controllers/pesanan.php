<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pesanan extends KK_Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['getPesanan'] = $this->m_pesanan->getPesanan();
        $this->renderpage('pesanan',$data);
    }

    public function status($status)
    {
        switch ($status) {
            case '1':
                $data['getPesanan'] = $this->m_pesanan->getPesananStatus('1');
            break;
            case '2':
                $data['getPesanan'] = $this->m_pesanan->getPesananStatus('2');
            break;
            case '3':
                $data['getPesanan'] = $this->m_pesanan->getPesananStatus('3');
            break;
            
        }
        
        $this->renderpage('pesanan',$data);
    }

    public function addNew()
    {
        if ( $this->islogin ) {
            $nama = $this->input->post('nama', TRUE);
            if ( $nama == ""){
                $data['id_user'] = $this->session->userdata('id');
                $data['pesanan'] = '';
                $this->renderpage('pesanan-new',$data);
            }else{
                $id = $this->m_pesanan->addNew();
                // redirect('index.php/pesanan/editPesanan/'.$id);
                redirect('index.php/pesanan/');
            }
        }else{
            redirect('/');
        }
    }

    public function editPesanan($id) {
        $id_post = $this->input->post('id', TRUE);
        if ( $id_post == ""){
            $user = $this->m_pesanan->getPesanan($id);
            $data['id_user'] = $this->session->userdata('id');
            $data['pesanan'] = $user;
            $data['statusPesanan'] = arrsPesanan();
            $this->renderpage('pesanan-new',$data);
        }else{
            $id = $this->m_pesanan->updatePesanan();
            redirect('index.php/pesanan/editPesanan/'.$id);
        }
    }

    public function detailPesanan($id){
        if ( $id == ""){
            $this->renderpage('/');
        }else{
            $data['pesanan'] = $this->m_pesanan->getPesanan($id);
            $this->renderpage('pesanan-detail',$data);
        }
    }

    public function pesananPrint($id){
        if ( $id == ""){
            $this->renderpage('/');
        }else{
            $data['pesanan'] = $this->m_pesanan->getPesanan($id);
            $this->load->view('pesanan-print',$data);
        }
    }

    public function deletePesanan($id) {
        
        $this->m_pesanan->deletePesanan($id);
        redirect('index.php/pesanan');
    }

    public function Cetak(){
        $tgl_awal = $this->input->post('tanggal_awal', TRUE);
        $tgl_akhir = $this->input->post('tanggal_akhir', TRUE);

        if ( $tgl_awal == ""){
            $data['pesanan'] = '';
            $this->renderpage('pesanan-cetak',$data);
        }else{
            $data['pesanan'] = $this->m_pesanan->getPesananTgl($tgl_awal, $tgl_akhir);
            $this->load->view('pesanan-cetak-print',$data);
        }
    }

    public function cetakPesanan($id){

        if ( $id == ""){
            $this->renderpage('/');
        }else{
            $data['pesanan'] = $this->m_pesanan->getPesanan($id);
            $this->load->view('pesanan-cetak-nota',$data);
        }
    }


    /* ============================= Upload Gambar ==========================================*/
    public function perhitunganTanggal(){
        date_default_timezone_set("Asia/Jakarta");

        $data = $this->m_pesanan->getPesananStatus('1');
        foreach ($data as $key => $value) {
            $tgl1 = $value->tgl_jadi;
            $tgl2 = date('Y-m-d');
            $selisih = ((abs(strtotime ($tgl2) - strtotime ($tgl1)))/(60*60*24));
            // echo $tgl1.' - '.$tgl2.' = '.$selisih.'<br />';
            if ($selisih <= 7) {
                $this->m_pesanan->updateStatusPesanan($value->id_pesanan,'2');
            }
        }
        redirect('/');
    }

    /* ============================= Upload Gambar ==========================================*/
    private function imagename($filename){
        
        $char = 'ea011088ddc8b17e619322202f1f177d';
        $pswd = sha1(sha1($char) . date('Y-m-d H:i:s')); 
        $newpwd = substr($pswd, 10, 20);
        $pecah = explode(".", $filename);
        $belah = count($pecah);
        $ext = strtolower($pecah[$belah-1]);
        $newName = substr($newpwd, 0,10).".".$ext;
        return $newName;
    }

    public function do_upload(){
        define('IS_AJAX',true);
        $doc_root = $_SERVER['DOCUMENT_ROOT'];
        $target_foto = $doc_root."/hasbi/statics/images/";

        if(!empty($_FILES['foto'])){
            $ft = $_FILES['foto']['type'];
            $tipe = array("image/jpg","image/jpeg","image/png");
            if(in_array($ft, $tipe)){
                $nama = $this->imagename($_FILES['foto']['name']);
                move_uploaded_file($_FILES['foto']['tmp_name'],$target_foto.$nama);
                $data = array();
                $data['imgname'] = $nama;
                echo json_encode($data);
                die();
            }
        }
    }
}