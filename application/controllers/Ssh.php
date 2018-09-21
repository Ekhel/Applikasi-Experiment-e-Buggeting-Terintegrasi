<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ssh extends CI_controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_ssh');
		$this->load->library(array('form_validation'));
    	$this->load->helper('url','form-helper');

	}


	public function index()
	{
		$data['title'] = 'Data Barang | Sistem Inventory';
		$data['ssh'] = $this->db->query("SELECT * FROM ssh ORDER BY id_ssh");
		//$data['count_barang'] = $this->db->query("SELECT * FROM tb_barang ORDER BY kd_barang DESC LIMIT 1");
		$this->template->load('MasterLayout','SSh/main_v',$data);
	}

	public function inc_ssh()
	{
		if (isset($_POST) && !empty($_POST)) {
            $this->form_validation->set_rules('nama', 'nama', 'trim|required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
            $this->form_validation->set_rules('satuan', 'satuan', 'trim|required');
            $this->form_validation->set_rules('harga', 'harga', 'trim|required');
            
            if ($this->form_validation->run() == FALSE){
                $this->session->set_flashdata("msg","
                        <div class='alert alert-warning fade in'>
                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
                            <strong>Gagal !</strong> Isi Data dengan Lengkap !
                        </div>");
                header('location:'.base_url().'Ssh/index');
            }else{
            	$act = $this->input->post('act');
            	$id_ssh = $this->input->post('id_ssh');
            	$nama = $this->input->post('nama');
            	$deskripsi = $this->input->post('deskripsi');
            	$satuan = $this->input->post('satuan');
            	$harga = $this->input->post('harga');

            	if($act=='edit'){
            		$edit = $this->db->query("UPDATE ssh SET nama='$nama', deskripsi='$deskripsi', satuan='$satuan', harga='$harga' WHERE id_ssh='$id_ssh' ");
            		if($edit){
	            		$this->session->set_flashdata("msg","
	                        <div class='alert alert-success fade in'>
	                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
	                            <strong>Success !</strong> Berhasil Mengubah Data !
	                        </div>");
	            	}else{
	            		$this->session->set_flashdata("msg","
	                        <div class='alert alert-warning fade in'>
	                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
	                            <strong>Failed !</strong> Terjadi Kesalahan mengubah data!
	                        </div>");
	            	}
                	header('location:'.base_url().'Ssh/index');
            	}else{
            		$add = $this->db->query("INSERT INTO ssh (nama,deskripsi,satuan,harga) VALUES ('$nama','$deskripsi','$satuan','$harga') ");
            		if($add){
	            		$this->session->set_flashdata("msg","
	                        <div class='alert alert-success fade in'>
	                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
	                            <strong>Success !</strong> Berhasil Menambah Data SSH !
	                        </div>");
	            	}else{
	            		$this->session->set_flashdata("msg","
	                        <div class='alert alert-warning fade in'>
	                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
	                            <strong>Failed !</strong> Terjadi Kesalahan menambah data SSH!
	                        </div>");
	            	}
                	header('location:'.base_url().'Ssh/index');
            	}
            }
        }else{
        	$this->error();
        }
	}


	public function hapus_ssh($id_ssh)
	{
		if (isset($id_ssh) && !empty($id_ssh)) {
			$hapus = $this->db->query("DELETE FROM ssh WHERE id_ssh='$id_ssh' ");
			if($hapus){
				$this->session->set_flashdata("msg","<div class='alert alert-success fade in'>
					<a href='#' class='close' data-dismiss='alert'>&times;</a>
					<strong>Success !</strong> Berhasi mengahapus data SSH!
				</div>");
			}else{
				$this->session->set_flashdata("msg","<div class='alert alert-danger fade in'>
					<a href='#' class='close' data-dismiss='alert'>&times;</a>
					<strong>Failed !</strong> Terjadi Kesalahan penghapusan data SSH!
				</div>");
			}
			
			header('location:'.base_url().'Ssh/index');
		}else $this->error();
	}


	
}