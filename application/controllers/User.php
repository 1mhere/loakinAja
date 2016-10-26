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
      $this->session->set_flashdata('error','Username/password salah');
    	redirect("user/account");
    }
  }

	public function logout(){
			$this->session->sess_destroy();
			redirect();
	}

	public function masuk()
	{
		$this->load->view('masuk');
	}

	public function account()
	{
		// var_dump($this->session->userdata('username'));
		// exit;
		$cek= $this->session->userdata('username');
		if(!empty($cek)){
			$this->load->view('account');
		}else
			redirect("user/masuk");
	}


	public function account_edit()
	{
		// var_dump($this->session->userdata('username'));
		// exit;
		$cek= $this->session->userdata('username');
		if(!empty($cek)){
			$this->load->view('account_edit.php');
		}else
			redirect("user/masuk");
	}

	public function change_pass(){
		$username= $this->session->userdata('username');
		$newpass= $_POST['newpass'];
		$confirm = $_POST['confirm'];
		$pass = md5($_POST['password']);

    $cek_login = $this->db->get_where('user',array('username' => $username, 'password'=> $pass))->result();

		// var_dump($cek_login);exit;
    if(!empty($cek_login)){
			if($newpass != ""){
				if($newpass == $confirm){
					$data_update = array(
							'password' => md5($newpass)
						);
					$where = array('username' => $username);
					$res = $this->Basic->UpdateData('user',$data_update,$where);
					if($res>=1){
						$this->session->set_flashdata('pesan','Ganti Kata Sandi Berhasil');
						redirect('user/account');
					}
				}else{
					$this->session->set_flashdata('pesan','Gagal : Kata sandi baru tidak sama');
					redirect('user/account');
				}
			}else{
				$this->session->set_flashdata('pesan','Gagal : Kata Sandi tidak bisa kosong');
				redirect('user/account');
			}
		}else{
			$this->session->set_flashdata('pesan','Gagal : Kata Sandi lama salah');
			redirect('user/account');
		}
	}

	public function change_profil(){
		$username = $this->session->userdata('username');
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];

    $cek_login = $this->db->get_where('user',array('username' => $username))->result();

		// var_dump($cek_login);exit;
    if(!empty($cek_login)){
					$data_update = array(
							'name' => $name,
							'username' => $username,
							'email' => $email,
							'phone' => $phone,
							'alamat' => $address,
							'status' =>  $this->session->userdata('status'),
						);
					$where = array('username' => $username);
					$res = $this->Basic->UpdateData('user',$data_update,$where);
					// var_dump($data_update);exit;
					if($res>=1){
						$this->session->set_userdata($data_update);
						$this->session->set_flashdata('pesan','Data berhasil diperbarui');
						redirect('user/account');
					}
		}else{
			$this->session->set_flashdata('pesan','Gagal Memperbarui Data');
			redirect('user/account_edit');
		}
	}

	public function jual()
	{
		$username= $this->session->userdata('username');
		if(!empty($username)){
			$data['data'] = $this->Basic->GetJenis();
			// var_dump($data);exit;
			$this->load->view('jual',$data);
		}else
			redirect("user/masuk");
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
			$getHarga = $this->Basic->Getharga($jenis);
			$hargaKg = $getHarga[0]['harga'];
			// var_dump($hargaKg);exit;

			$data_insert = array(
          'username' => $username,
          'jenis' => $jenis,
          'berat' => $berat,
					'tanggal' => date('Y-m-d'),
					'keterangan' => $ket,
					'harga' => $berat*$hargaKg,
					'lokasi' => $lokasi,
      );
      $res = $this->Basic->InsertData('barang',$data_insert);
      if($res>0){
        $this->session->set_flashdata('pesan','Berhasil');
				$data['data'] = $berat*$hargaKg;
        	$this->load->view('thanks',$data);
      }else{
        $this->session->set_flashdata('pesan','Gagal');
        redirect('user/jual');
      }
		}else
			redirect("user/masuk");
	}

	public function donasi()
	{
		$cek= $this->session->userdata('username');
		if(!empty($cek)){
			$this->load->view('donasi');
		}else
			redirect("user/masuk");
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
					'harga' => 0,
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
			redirect("user/masuk");
	}

	public function history()
	{
		$username= $this->session->userdata('username');
		if(!empty($username)){
			$data['data'] = $this->Basic->GetHistory($username);
			// var_dump($data);exit;
			$this->load->view('history',$data);
		}else
			redirect("user/masuk");
	}

	public function detail($id)
	{
		$username= $this->session->userdata('username');
		if(!empty($username)){
			$data['data'] = $this->Basic->GetDetail($username,$id);
			// var_dump($data);exit;
			$this->load->view('detail',$data);
		}else
			redirect("user/masuk");
	}

	public function thanks()
	{
		$this->load->view('thanks');
	}

}
