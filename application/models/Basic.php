<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic extends CI_Model {

	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}

	public function DeleteData($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}

	public function GetHistory($usr=""){
		$data = $this->db->query('select * from barang where username ="'.$usr.'" order by tanggal');
		return $data->result_array();
	}

	public function GetDetail($usr="",$id=""){
		$data = $this->db->query('select * from barang where username ="'.$usr.'" and  id_barang = '.$id.' order by tanggal');
		return $data->result_array();
	}

	public function GetJenis(){
		$data = $this->db->query('select * from jenis');
		return $data->result_array();
	}

	public function GetHarga($id){
		$data = $this->db->query('select harga from jenis where id_jenis = '.$id);
		return $data->result_array();
	}

}
