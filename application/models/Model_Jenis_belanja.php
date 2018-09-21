<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Jenis_belanja extends CI_Model {

	
	public function getAll_jenisbelanja()
	{
		return $this->db->get('jenis_belanja')->result();
			
    }

    public function getAll_subjenisbelanja()
    {
        return $this->db->get('sub_jenis_belanja')->result();
    }

    public function getAll_akunrekbelanja()
    {
        return $this->db->get('akun_rek_belanja')->result();
    }

    public function getAll_sub_akun_rek_belanja()
    {
        return $this->db->get('sub_akun_rek_belanja')->result();
    }

    public function Renja($tahun = 0, $id_skpd = 0)
    {
        $param = "";
        $tahun = $this->input->get('tahun');
        $id_skpd = $this->input->get('id_skpd');
        if ($tahun=="") {
            # code...
            $tahun = date("Y");
        }

        $url5 =  "http://sipp.jayapurakab.go.id/webservices/renja?tahun=".$tahun."&id_skpd=".$id_skpd."";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url5);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);

        $readjson = curl_exec($ch);
        $datas =   json_decode($readjson,true);

        $hasil = $datas['result'];

        return $hasil;
    }

    public function Renja2($tahun = 0, $id_skpd = 0)
    {
        $param = "";
        $tahun = $this->input->get('tahun');
        $id_skpd = $this->input->get('id_skpd');
        if ($tahun=="") {
            # code...
            $tahun = date("Y");
        }

        $url5 =  "http://sipp.jayapurakab.go.id/webservices/renja?tahun=".$tahun."&id_skpd=".$id_skpd."";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url5);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);

        $readjson = curl_exec($ch);

        $datas =   json_decode($readjson,true);
        $hasil2 = $datas['result'];
        // modif

        $program = array();
        foreach ($hasil2 as $key) {
            $data[$key['id_program']]['id_program'] = $key['id_program'];
            $data[$key['id_program']]['program'] = $key['program'];

            $program[$key['id_program']] = array(
                'id_program'=>$key['id_program'], 
                'program'=>$key['program']);
        }
    
        return $program;
    }

    public function getdetailrenja($id_mus_forum_skpd)
    {
        
        $url10 =  "http://sipp.jayapurakab.go.id/webservices/renja_detil/".$id_mus_forum_skpd."";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url10);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);

        $readjson = curl_exec($ch);

        $datas =   json_decode($readjson,true);
        $hasil = $datas['result'];

        return $hasil;
    }

    public function pd()
    {
        $url4 =  "http://sipp.jayapurakab.go.id/webservices/skpd";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url4);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);

        $readjson = curl_exec($ch);

        $datas =   json_decode($readjson,true);
        $hasil = $datas['result'];

        return $hasil;
    }

    public function gabung($id_mus_forum_skpd)
    {

        $this->db->select('jenis_belanja.kode_1,
            jenis_belanja.id_jenis_belanja, 
            jenis_belanja.jenis_belanja,
            sub_jenis_belanja.kode_2,
            sub_jenis_belanja.id_sub_jenis_belanja,
            sub_jenis_belanja.sub_jenis_belanja,
            akun_rek_belanja.kode_3,
            akun_rek_belanja.id_rek_belanja,
            akun_rek_belanja.akun_rek_belanja,
            belanja.kode,
            belanja.uraian,
            belanja.id_rek');
        $this->db->from('belanja');
        $this->db->join('akun_rek_belanja', 'akun_rek_belanja.id_rek_belanja = belanja.id_rek_belanja','inner');
        $this->db->join('sub_jenis_belanja','sub_jenis_belanja.id_sub_jenis_belanja = akun_rek_belanja.id_sub_jenis_belanja','inner');
        $this->db->join('jenis_belanja', 'jenis_belanja.id_jenis_belanja = sub_jenis_belanja.id_jenis_belanja', 'inner');
        $this->db->where('belanja.id_renja',$id_mus_forum_skpd);
        $this->db->group_by('jenis_belanja.kode_1,
            jenis_belanja.id_jenis_belanja, 
            jenis_belanja.jenis_belanja,
            sub_jenis_belanja.kode_2,
            sub_jenis_belanja.id_sub_jenis_belanja,
            sub_jenis_belanja.sub_jenis_belanja,
            akun_rek_belanja.kode_3,
            akun_rek_belanja.id_rek_belanja,
            akun_rek_belanja.akun_rek_belanja
            ');
        $query = $this->db->get();
        return $query->result();
    }

    public function gabung2($id_mus_forum_skpd)
    {

        $this->db->select('jenis_belanja.kode_1,
            jenis_belanja.id_jenis_belanja, 
            jenis_belanja.jenis_belanja,
            sub_jenis_belanja.kode_2,
            sub_jenis_belanja.id_sub_jenis_belanja,
            sub_jenis_belanja.sub_jenis_belanja,
            akun_rek_belanja.kode_3,
            akun_rek_belanja.id_rek_belanja,
            akun_rek_belanja.akun_rek_belanja,
            belanja.kode,
            belanja.uraian,
            belanja.id_rek');
        $this->db->from('belanja');
        $this->db->join('akun_rek_belanja', 'akun_rek_belanja.id_rek_belanja = belanja.id_rek_belanja','inner');
        $this->db->join('sub_jenis_belanja','sub_jenis_belanja.id_sub_jenis_belanja = akun_rek_belanja.id_sub_jenis_belanja','inner');
        $this->db->join('jenis_belanja', 'jenis_belanja.id_jenis_belanja = sub_jenis_belanja.id_jenis_belanja', 'inner');
        $this->db->where('belanja.id_renja',$id_mus_forum_skpd);

        //$this->db->group_by(array(
            //'jenis_belanja.kode_1',
            //'jenis_belanja.jenis_belanja',
            //'sub_jenis_belanja.kode_2',
            //'sub_jenis_belanja.sub_jenis_belanja',
            //'akun_rek_belanja.kode_3',
            //'akun_rek_belanja.akun_rek_belanja'));
        //$this->db->distinct()->select();           
        $query = $this->db->get();

        $group_belanja = array();

        foreach($query as $key) {
            $group_belanja[$key['id_jenis_belanja']]['id_jenis_belanja'] = $key['id_jenis_belanja'];
            $group_belanja[$key['id_jenis_belanja']]['kode_1'] = $key['kode_1'];
            $group_belanja[$key['id_jenis_belanja']]['jenis_belanja'] = $key['jenis_belanja'];

            //$data[$key['id_sub_jenis_belanja']]['id_sub_jenis_belanja'] = $key['id_sub_jenis_belanja'];
            //$data[$key['id_sub_jenis_belanja']]['kode_2'] = $key['kode_2'];
            //$data[$key['id_sub_jenis_belanja']]['sub_jenis_belanja'] = $key['sub_jenis_belanja'];

            //$data[$key['id_rek_belanja']]['id_rek_belanja'] = $key['id_rek_belanja'];
            //$data[$key['id_rek_belanja']]['kode_3'] = $key['kode_3'];
            //$data[$key['id_rek_belanja']]['akun_rek_belanja'] = $key['akun_rek_belanja'];               

        }
        return $group_belanja();
        //return $query->result();
    }

    public function gabung3($id_mus_forum_skpd)
    {

        $this->db->select('jenis_belanja.kode_1,
            jenis_belanja.id_jenis_belanja, 
            jenis_belanja.jenis_belanja,
            sub_jenis_belanja.kode_2,
            sub_jenis_belanja.id_sub_jenis_belanja,
            sub_jenis_belanja.sub_jenis_belanja,
            akun_rek_belanja.kode_3,
            akun_rek_belanja.id_rek_belanja,
            akun_rek_belanja.akun_rek_belanja,
            belanja.kode,
            belanja.uraian,
            belanja.id_rek');
        $this->db->from('belanja');
        $this->db->join('akun_rek_belanja', 'akun_rek_belanja.id_rek_belanja = belanja.id_rek_belanja','inner');
        $this->db->join('sub_jenis_belanja','sub_jenis_belanja.id_sub_jenis_belanja = akun_rek_belanja.id_sub_jenis_belanja','inner');
        $this->db->join('jenis_belanja', 'jenis_belanja.id_jenis_belanja = sub_jenis_belanja.id_jenis_belanja', 'inner');
        $this->db->where('belanja.id_renja',$id_mus_forum_skpd);

        //$this->db->group_by(array(
            //'jenis_belanja.kode_1',
            //'jenis_belanja.jenis_belanja',
            //'sub_jenis_belanja.kode_2',
            //'sub_jenis_belanja.sub_jenis_belanja',
            //'akun_rek_belanja.kode_3',
            //'akun_rek_belanja.akun_rek_belanja'));
        //$this->db->distinct()->select();           
        $query = $this->db->get();

        $group_belanja = array();

        foreach($query as $key) {
            $group_belanja[$key['id_jenis_belanja']]['id_jenis_belanja'] = $key['id_jenis_belanja'];
            $group_belanja[$key['id_jenis_belanja']]['kode_1'] = $key['kode_1'];
            $group_belanja[$key['id_jenis_belanja']]['jenis_belanja'] = $key['jenis_belanja'];

            //$data[$key['id_sub_jenis_belanja']]['id_sub_jenis_belanja'] = $key['id_sub_jenis_belanja'];
            //$data[$key['id_sub_jenis_belanja']]['kode_2'] = $key['kode_2'];
            //$data[$key['id_sub_jenis_belanja']]['sub_jenis_belanja'] = $key['sub_jenis_belanja'];

            //$data[$key['id_rek_belanja']]['id_rek_belanja'] = $key['id_rek_belanja'];
            //$data[$key['id_rek_belanja']]['kode_3'] = $key['kode_3'];
            //$data[$key['id_rek_belanja']]['akun_rek_belanja'] = $key['akun_rek_belanja'];               

        }
        return $group_belanja();
        //return $query->result();
    }

    public function gabung4($id_mus_forum_skpd)
    {

        $this->db->select('jenis_belanja.kode_1,
            jenis_belanja.id_jenis_belanja, 
            jenis_belanja.jenis_belanja,
            sub_jenis_belanja.kode_2,
            sub_jenis_belanja.id_sub_jenis_belanja,
            sub_jenis_belanja.sub_jenis_belanja,
            akun_rek_belanja.kode_3,
            akun_rek_belanja.id_rek_belanja,
            akun_rek_belanja.akun_rek_belanja,
            belanja.kode,
            belanja.uraian,
            belanja.id_rek');
        $this->db->from('belanja');
        $this->db->join('akun_rek_belanja', 'akun_rek_belanja.id_rek_belanja = belanja.id_rek_belanja','inner');
        $this->db->join('sub_jenis_belanja','sub_jenis_belanja.id_sub_jenis_belanja = akun_rek_belanja.id_sub_jenis_belanja','inner');
        $this->db->join('jenis_belanja', 'jenis_belanja.id_jenis_belanja = sub_jenis_belanja.id_jenis_belanja', 'inner');
        $this->db->where('belanja.id_renja',$id_mus_forum_skpd);

        //$this->db->group_by(array(
            //'jenis_belanja.kode_1',
            //'jenis_belanja.jenis_belanja',
            //'sub_jenis_belanja.kode_2',
            //'sub_jenis_belanja.sub_jenis_belanja',
            //'akun_rek_belanja.kode_3',
            //'akun_rek_belanja.akun_rek_belanja'));
        //$this->db->distinct()->select();           
        $query = $this->db->get();

        $group_belanja = array();

        foreach($query as $key) {
            $group_belanja[$key['id_jenis_belanja']]['id_jenis_belanja'] = $key['id_jenis_belanja'];
            $group_belanja[$key['id_jenis_belanja']]['kode_1'] = $key['kode_1'];
            $group_belanja[$key['id_jenis_belanja']]['jenis_belanja'] = $key['jenis_belanja'];

            //$data[$key['id_sub_jenis_belanja']]['id_sub_jenis_belanja'] = $key['id_sub_jenis_belanja'];
            //$data[$key['id_sub_jenis_belanja']]['kode_2'] = $key['kode_2'];
            //$data[$key['id_sub_jenis_belanja']]['sub_jenis_belanja'] = $key['sub_jenis_belanja'];

            //$data[$key['id_rek_belanja']]['id_rek_belanja'] = $key['id_rek_belanja'];
            //$data[$key['id_rek_belanja']]['kode_3'] = $key['kode_3'];
            //$data[$key['id_rek_belanja']]['akun_rek_belanja'] = $key['akun_rek_belanja'];               

        }
        return $group_belanja();
        //return $query->result();
    }

    public function delete_rek($id_rek)  
    {  
        $this->db->where("id_rek", $id_rek);  
        $this->db->delete("belanja");
           //DELETE FROM users WHERE id = '$user_id'  
    }

    public function akun_rek($id_mus_forum_skpd)
    {
        $this->db->select('jenis_belanja.kode_1 as kode_1,
            jenis_belanja.id_jenis_belanja as id_jenis_belanja, 
            jenis_belanja.jenis_belanja as jenis_belanja,
            sub_jenis_belanja.kode_2 as kode_2,
            sub_jenis_belanja.id_sub_jenis_belanja as id_sub_jenis_belanja,
            sub_jenis_belanja.sub_jenis_belanja as sub_jenis_belanja,
            akun_rek_belanja.kode_3 as kode_3,
            akun_rek_belanja.id_rek_belanja as id_rek_belanja,
            akun_rek_belanja.akun_rek_belanja as akun_rek_belanja,
            belanja.kode as kode,
            belanja.uraian as uraian,
            belanja.id_rek as id_rek');
        $this->db->distinct('kode_1,
            id_jenis_belanja, 
            jenis_belanja,
            kode_2,
            id_sub_jenis_belanja,
            sub_jenis_belanja,
            kode_3,
            id_rek_belanja,
            akun_rek_belanja');
        $this->db->from('belanja');
        $this->db->join('akun_rek_belanja', 'akun_rek_belanja.id_rek_belanja = belanja.id_rek_belanja','inner');
        $this->db->join('sub_jenis_belanja','sub_jenis_belanja.id_sub_jenis_belanja = akun_rek_belanja.id_sub_jenis_belanja','inner');
        $this->db->join('jenis_belanja', 'jenis_belanja.id_jenis_belanja = sub_jenis_belanja.id_jenis_belanja', 'inner');
        //$this->db->order_by('jenis_belanja.kode_1,
            //jenis_belanja.id_jenis_belanja, 
            //jenis_belanja.jenis_belanja,
            //sub_jenis_belanja.kode_2,
            //sub_jenis_belanja.id_sub_jenis_belanja,
            //sub_jenis_belanja.sub_jenis_belanja,
            //akun_rek_belanja.kode_3,
            //akun_rek_belanja.id_rek_belanja,
            //akun_rek_belanja.akun_rek_belanja');
        $this->db->where('belanja.id_renja',$id_mus_forum_skpd);

        $query = $this->db->get();
         return $query->result();
    }

    public function rab($id_mus_forum_skpd)
    {
        $this->db->select('*');
        $this->db->from('rab');
        $this->db->join('belanja', 'belanja.id_rek = rab.id_rek', 'inner');
        $this->db->where('belanja.id_renja',$id_mus_forum_skpd);
        $query = $this->db->get();
        return $query->result();

    }

     public function get_id_rek($id_rek){
        $this->db->select('*');
        $this->db->from('belanja');
        $this->db->join('rab', 'rab.id_rek = belanja.id_rek', 'left');
        $this->db->where('belanja.id_rek',$id_rek);
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        return $query->result();
        }
    }

    public function get_input_rab($id_rek,$belanja)
    {
       return $this->db->get_where($belanja,$id_rek);
    }

}