<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis_belanja extends CI_controller{

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
    	$this->load->helper('url','form-helper');

	}

	public function index()
	{
		$data['title'] = 'Data Barang | Sistem Inventory';
		$data['jenis_b'] = $this->db->query("SELECT * FROM jenis_belanja ORDER BY kode_1");
		//$data['count_barang'] = $this->db->query("SELECT * FROM tb_barang ORDER BY kd_barang DESC LIMIT 1");
		$this->template->load('MasterLayout','Belanja/jenis_belanja/main_v_jenis_belanja',$data);
	}

	public function inc_jenis_belanja()
	{
		if (isset($_POST) && !empty($_POST)) {           
            $this->form_validation->set_rules('kode_1', 'kode_1', 'trim|required');
            $this->form_validation->set_rules('jenis_belanja', 'jenis_belanja', 'trim|required');
            
            if ($this->form_validation->run() == FALSE){
                $this->session->set_flashdata("msg","
                        <div class='alert alert-warning fade in'>
                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
                            <strong>Gagal !</strong> Isi Data dengan Lengkap !
                        </div>");
                header('location:'.base_url().'jenis_belanja/index');
            }else{
            	$act = $this->input->post('act');
            	$id_jenis_belanja = $this->input->post('id_jenis_belanja');
            	$kode_1 = $this->input->post('kode_1');
            	$jenis_belanja = $this->input->post('jenis_belanja');

            	if($act=='edit'){
            		$edit = $this->db->query("UPDATE jenis_belanja SET kode_1='$kode_1', jenis_belanja='$jenis_belanja' WHERE id_jenis_belanja ='$id_jenis_belanja' ");
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
	                            <strong>Failed !</strong> Terjadi Kesalahan mengubah data!!!
	                        </div>");
	            	}
                	header('location:'.base_url().'jenis_belanja/index');
            	}else{
            		$add = $this->db->query("INSERT INTO jenis_belanja (kode_1,jenis_belanja) VALUES ('$kode_1','$jenis_belanja') ");
            		if($add){
	            		$this->session->set_flashdata("msg","
	                        <div class='alert alert-success fade in'>
	                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
	                            <strong>Success !</strong> Berhasil Menambah Data Jenis belanja !
	                        </div>");
	            	}else{
	            		$this->session->set_flashdata("msg","
	                        <div class='alert alert-warning fade in'>
	                            <a href='#' class='close' data-dismiss='alert'>&times;</a>
	                            <strong>Failed !</strong> Terjadi Kesalahan menambah data Jenis belanja!
	                        </div>");
	            	}
                	header('location:'.base_url().'jenis_belanja/index');
            	}
            }
        }else{
        	$this->error();
        }
	}

	public function hapus_jenis_belanja($id_jenis_belanja)
	{
		if (isset($id_jenis_belanja) && !empty($id_jenis_belanja)) {
			$hapus = $this->db->query("DELETE FROM jenis_belanja WHERE id_jenis_belanja='$id_jenis_belanja' ");
			if($hapus){
				$this->session->set_flashdata("msg","<div class='alert alert-success fade in'>
					<a href='#' class='close' data-dismiss='alert'>&times;</a>
					<strong>Success !</strong> Berhasi mengahapus data Jenis belanja!
				</div>");
			}else{
				$this->session->set_flashdata("msg","<div class='alert alert-danger fade in'>
					<a href='#' class='close' data-dismiss='alert'>&times;</a>
					<strong>Failed !</strong> Terjadi Kesalahan penghapusan data Jenis belanja!
				</div>");
			}
			
			header('location:'.base_url().'jenis_belanja/index');
		}else $this->error();
	}


}