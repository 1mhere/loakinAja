<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Main.php");

class Mitra extends Main{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('mitra');
	}

	public function do_join(){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		if($name != "" and $password != "" and $phone != "" and $username != ""){
			$cek_login = $this->db->get_where('user',array('username' => $username));
			if($cek_login->num_rows()==0){
					$data_insert = array(
							'name' => $name,
							'username' => $username,
							'email' => $email,
							'phone' => $phone,
							'alamat' => $address,
							'password' => md5($password),
							'status' => 1
					);
					$res = $this->Basic->InsertData('user',$data_insert);
					if($res>0){
						$this->session->set_userdata($data_insert);
						$this->session->set_flashdata('pesan','Pendaftaran Berhasil');
						redirect('user/thanks');
					}else{
						$this->session->set_flashdata('pesan','Pendaftaran Gagal');
						redirect('main/gabung');
					}
			}else {
				$this->session->set_flashdata('pesan','Username telah digunakan, Gunakan username lain');
				redirect('main/gabung');
			}
		}else{
			$this->session->set_flashdata('pesan','Form Nama, username, nomor telepon dan password harus di isi, mohon diisi dengan benar');
			redirect('main/gabung');
		}
	}

	public function login()
	{
		$this->load->view('login_mitra');
	}

}
