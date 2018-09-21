<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja_langsung extends CI_controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_jenis_belanja');
		$this->load->library(array('form_validation'));
    	$this->load->helper('url','form-helper');

	}

	public function index()
	{
		$data['itemjenisbelanja'] = $this->Model_jenis_belanja->getAll_jenisbelanja();
		$data['itemsubjenisbelanja'] = $this->Model_jenis_belanja->getAll_subjenisbelanja();
		$data['itemrekbelanja'] = $this->Model_jenis_belanja->getAll_akunrekbelanja();
		$data['itemsubakunrekbelanja'] = $this->Model_jenis_belanja->getAll_sub_akun_rek_belanja();
		$this->template->load('MasterLayout','belanja',$data);
	}


	public function Renjalist()
	{

		$data['hasil'] = $this->Model_jenis_belanja->Renja();
		$data['hasil2'] = $this->Model_jenis_belanja->Renja2();
		$data['opd'] = $this->Model_jenis_belanja->pd();
		//$data['program'] = $this->Model_webservices->program();

	 	$this->template->load('MasterLayout','Belanja/renja', $data);
	}

	public function detail_renja()
	{
		$data['hasil'] = $this->Model_jenis_belanja->getdetailrenja($this->uri->segment(3));

		$this->template->load('MasterLayout','Belanja/detail-renja', $data);
	}

	public function Tambah_Belanja($id_mus_forum_skpd = null)
	{
        
		$data['sub_akun_belanja'] = $this->db->query("SELECT * FROM sub_akun_rek_belanja ORDER BY kode_4 asc");
		$data['hasil'] = $this->Model_jenis_belanja->getdetailrenja($this->uri->segment(3));
		$data['akunbelanja'] = $this->Model_jenis_belanja->getAll_sub_akun_rek_belanja();
        $data['bel1'] = $this->Model_jenis_belanja->gabung($id_mus_forum_skpd);
        $data['bel2'] = $this->Model_jenis_belanja->gabung($id_mus_forum_skpd);
        $data['bel3'] = $this->Model_jenis_belanja->gabung($id_mus_forum_skpd);
        $data['bel4'] = $this->Model_jenis_belanja->gabung($id_mus_forum_skpd);
		$this->template->load('MasterLayout','Belanja/tambah-belanja',$data);

	}

    public function akunrekbelanja($id_mus_forum_skpd = null)
    {
        //$data['hasil'] = $this->Model_jenis_belanja->getdetailrenja($this->uri->segment(3));
        //$data['bel1'] = $this->Model_jenis_belanja->akun_rek($id_mus_forum_skpd);
        $data = array('content' => 'detail-rek', 'bel1' =>$this->Model_jenis_belanja->akun_rek($id_mus_forum_skpd),
            'rabb' =>$this->Model_jenis_belanja->rab($id_mus_forum_skpd), 
            'hasil' => $this->Model_jenis_belanja->getdetailrenja($this->uri->segment(3)));

        $this->template->load('MasterLayout','Belanja/detail-rek',$data);
    }

    public function akunrekbelanja2()
    {
        $data = array('content' => 'detail-rek', 'bel1' =>$this->Model_jenis_belanja->akun_rek($id_mus_forum_skpd),
            'rabb' =>$this->Model_jenis_belanja->rab($id_mus_forum_skpd),
            'hasil' => $this->Model_jenis_belanja->getdetailrenja($this->uri->segment(3)));
    }

	public function SimpanBelanja()
	{
		if (isset($_POST) && !empty($_POST)) {
			
            $this->form_validation->set_rules('id_renja', 'id_renja', 'trim|required');
            $this->form_validation->set_rules('program', 'program', 'trim|required');
            $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required');
            $this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
            $this->form_validation->set_rules('kode', 'kode_4', 'trim|required');
            $this->form_validation->set_rules('id_sub_akun_rek', 'id_sub_akun_rek', 'trim|required');
            $this->form_validation->set_rules('id_rek_belanja', 'id_rek_belanja', 'trim|required');
            
            if ($this->form_validation->run() == FALSE){
            	$data['hasil'] = $this->Model_jenis_belanja->getdetailrenja($this->uri->segment(3));

                $this->session->set_flashdata("msg","
                        <div class='alert alert-warning fade in'>
                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
                            <strong>Gagal !</strong> Isi Data dengan Lengkap !
                        </div>");
                header('location:'.base_url().'Belanja_langsung/Tambah_Belanja/'.$id_renja.'');
            }else{
                
                $id_renja = $this->input->post('id_renja');
                $program = $this->input->post('program');
                $kegiatan = $this->input->post('kegiatan');
                $uraian = $this->input->post('uraian');
                $kode = $this->input->post('kode');
                $id_sub_akun_rek = $this->input->post('id_sub_akun_rek');
                $id_rek_belanja = $this->input->post('id_rek_belanja');

                //Proses Insert
                $query1 = $this->db->query("INSERT INTO belanja VALUES ('0','$id_renja','$program','$kegiatan','$uraian','$kode','$id_sub_akun_rek','$id_rek_belanja') ");

                if($query1){
                    $this->session->set_flashdata("msg","
                        <div class='alert alert-success fade in'>
                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
                            <strong>Success !</strong> Akun Rekening telah disimpan !
                        </div>");
                    redirect('Belanja_langsung/Tambah_Belanja/' .$id_renja.'');
                }else{
                    $this->session->set_flashdata("msg","
                        <div class='alert alert-warning fade in'>
                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
                            <strong>Failed !</strong> Terjadi Kesalahan dalam Mengisi Belanja Periksan Kembali !
                        </div>");
                }
                

                header('location:'.base_url().'Belanja_langsung/Tambah_Belanja/'.$id_renja.'');
                
            }
        }else{
            $this->error();
        }

    }

    public function hapus_rek_belanja($id_rek)
    {
        if (isset($id_rek) && !empty($id_rek)) {
            $hapus = $this->db->query("DELETE FROM belanja WHERE id_rek='$id_rek' ");
            if($hapus){
                $this->session->set_flashdata("msg","<div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasi mengahapus item belanja
                </div>");
            }else{
                $this->session->set_flashdata("msg","<div class='alert alert-danger fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Failed !</strong> Terjadi Kesalahan penghapusan item!
                </div>");
            }

            header('location:'.base_url().'Belanja_langsung/Tambah_Belanja/'.$id_mus_forum_skpd.'');
        }else $this->error();
    }

    public function hapus_rek()  
    {  
        $this->Model_jenis_belanja->delete_rek($_POST["id_rek"]);  
        echo 'Item Rekening Telah Dihapus';  
    } 

    public function Tambah_Rab($id_rek = null)
    {
        //$data['belanja'] = $this->Model_jenis_belanja->get_input_rab($this->uri->segment(3));

        $where = array('id_rek' => $id_rek);
        $data['bel'] = $this->Model_jenis_belanja->get_input_rab($where,'belanja')->result();
        $data['ssh'] = $this->db->query("SELECT * FROM ssh ORDER BY id_ssh asc");

        $this->template->load('MasterLayout','Belanja/input-rab',$data);
    } 


    public function SimpanRab()
    {
        if (isset($_POST) && !empty($_POST)) {
            
            $this->form_validation->set_rules('id_rek', 'id_rek', 'trim|required');
            $this->form_validation->set_rules('id_renja', 'id_renja', 'trim|required');
            $this->form_validation->set_rules('ssh', 'ssh', 'trim|required');
            $this->form_validation->set_rules('satuan', 'satuan', 'trim|required');
            $this->form_validation->set_rules('harga', 'harga', 'trim|required');
            $this->form_validation->set_rules('vol', 'vol', 'trim|required');
            $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
            
            if ($this->form_validation->run() == FALSE){
                //$data['bel'] = $this->Model_jenis_belanja->get_input_rab($this->uri->segment(3));

                $this->session->set_flashdata("msg","
                        <div class='alert alert-warning fade in'>
                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
                            <strong>Gagal !</strong> Isi Data dengan Lengkap !
                        </div>");
                header('location:'.base_url().'Belanja_langsung/Tambah_Rab/'.$id_rek.'');
            }else{
                
                $id_rek = $this->input->post('id_rek');
                $id_renja = $this->input->post('id_renja');
                $ssh = $this->input->post('ssh');
                $satuan = $this->input->post('satuan');
                $harga = $this->input->post('harga');
                $vol = $this->input->post('vol');
                $jumlah = $this->input->post('jumlah');

                //Proses Insert
                $query1 = $this->db->query("INSERT INTO rab VALUES ('0','$id_rek','$id_renja','$ssh','$satuan','$harga','$vol','$jumlah') ");

                if($query1){
                    $this->session->set_flashdata("msg","
                        <div class='alert alert-success fade in'>
                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
                            <strong>Success !</strong> Akun Rekening telah disimpan !
                        </div>");
                    redirect('Belanja_langsung/Tambah_Rab/' .$id_rek.'');
                }else{
                    $this->session->set_flashdata("msg","
                        <div class='alert alert-warning fade in'>
                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
                            <strong>Failed !</strong> Terjadi Kesalahan dalam Mengisi Belanja Periksan Kembali !
                        </div>");
                }
                

                header('location:'.base_url().'Belanja_langsung/Tambah_Rab/'.$id_rek.'');
                
            }
        }else{
            $this->error();
        }
    }

}

