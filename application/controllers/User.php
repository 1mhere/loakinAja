<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Main.php");

class User extends Main{

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
		$this->load->view('index');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function do_insert(){
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
							'status' => 2
          );
          $res = $this->Basic->InsertData('user',$data_insert);
          if($res>0){
            $this->session->set_userdata($data_insert);
            $this->session->set_flashdata('pesan','Pendaftaran Berhasil');
            redirect('user/account');
          }else{
            $this->session->set_flashdata('pesan','Pendaftaran Gagal');
            redirect('user/register');
          }
      }else {
        $this->session->set_flashdata('pesan','Username telah digunakan, Gunakan username lain');
        redirect('user/register');
      }
    }else{
      $this->session->set_flashdata('pesan','Form Nama, username, nomor telepon dan password harus di isi, mohon diisi dengan benar');
      redirect('user/register');
    }
	}

	public function login(){
    $u = $this->input->post('username');
		$p = md5($this->input->post('password'));

    $cek_login = $this->db->get_where('user',array('username' => $u, 'password'=> $p))->result();

		// var_dump($cek_login);exit;
    if(!empty($cek_login)){
      $ambil = $cek_login[0];
      // if($u == $ambil->username && $p== $ambil->password){
        $sess = array(
						'name' => $ambil->name,
						'username' => $ambil->username,
						'email' => $ambil->email,
						'phone' => $ambil->phone,
						'alamat' => $ambil->alamat,
						'status' => $ambil->status,
          );
        $this->session->set_userdata($sess);

				redirect("user/account");
    }else{
      $this->session->set_flashdata('pesan','Incorrect Username/password');
    	redirect("user/account");
    }
  }

	public function logout(){
			$this->session->sess_destroy();
			redirect();
	}

	public function loginMember()
	{
		$this->load->view('login_member');
	}

	public function loginAdmin()
	{
		$this->load->view('login_admin');
	}



	public function jual()
	{
		$cek= $this->session->userdata('username');
		if(!empty($cek)){
			$this->load->view('jual');
		}else
			redirect("user/loginMember");
	}

	public function do_jual()
	{
		$cek= $this->session->userdata('username');
		if(!empty($cek)){
			$username = $this->session->userdata('username');
			$jenis = $_POST['jenis'];
			$berat = $_POST['berat'];
			$lokasi = $_POST['lokasi'];
			$ket = $_POST['keterangan'];

			$data_insert = array(
          'username' => $username,
          'jenis' => $jenis,
          'berat' => $berat,
					'tanggal' => date('Y-m-d'),
					'keterangan' => $ket,
					'price' => $berat*2500,
					'lokasi' => $lokasi,
      );
      $res = $this->Basic->InsertData('barang',$data_insert);
      if($res>0){
        $this->session->set_flashdata('pesan','Berhasil');
				$data['data'] = $berat*2500;
        	$this->load->view('thanks',$data);
      }else{
        $this->session->set_flashdata('pesan','Gagal');
        redirect('user/jual');
      }
		}else
			redirect("user/loginMember");
	}

	public function donasi()
	{
		$cek= $this->session->userdata('username');
		if(!empty($cek)){
			$this->load->view('donasi');
		}else
			redirect("user/loginMember");
	}

	public function do_donasi()
	{
		$cek= $this->session->userdata('username');
		if(!empty($cek)){
			$username = $this->session->userdata('username');
			$jenis = $_POST['jenis'];
			$berat = $_POST['berat'];
			$lokasi = $_POST['lokasi'];
			$ket = $_POST['keterangan'];

			$data_insert = array(
          'username' => $username,
          'jenis' => $jenis,
          'berat' => $berat,
					'tanggal' => date('d/m/20y'),
					'keterangan' => $ket,
					'price' => 0,
					'lokasi' => $lokasi,
      );
      $res = $this->Basic->InsertData('barang',$data_insert);
      if($res>0){
        $this->session->set_flashdata('pesan','Berhasil');
				$data['data'] = 0;
        	$this->load->view('thanks',$data);
      }else{
        $this->session->set_flashdata('pesan','Gagal');
        redirect('user/jual');
      }
		}else
			redirect("user/loginMember");
	}

	public function history()
	{
		$cek= $this->session->userdata('username');
		if(!empty($cek)){
			$this->load->view('history');
		}else
			redirect("user/loginMember");
	}

	public function detail()
	{
		$cek= $this->session->userdata('username');
		if(!empty($cek)){
			$this->load->view('detail');
		}else
			redirect("user/loginMember");
	}

	public function account()
	{
		// var_dump($this->session->userdata('username'));
		// exit;
		$cek= $this->session->userdata('username');
		if(!empty($cek)){
			$this->load->view('account');
		}else
			redirect("user/loginMember");
	}
	public function thanks()
	{
		$this->load->view('thanks');
	}
}
