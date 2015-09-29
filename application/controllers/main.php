<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct()
    {
        parent::__construct();

		$this->load->model('homemodel');
		$this->load->helper('cookie');

		session_start ();
    }

    public function index()
    {
		if ($this->auth->is_logged_in () == false) {
			$this->login();
		} else {
            $data ['menu_id']=0;
			$data['multilevel'] = $this->usermodel->get_data(0,$this->session->userdata('level'));
			$data ['nama'] = $this->homemodel->get_nama_kantor ();
			$this->template->set ( 'title', 'home' );
			$this->template->load ( 'template', 'global/index',$data );
			
   		}
	}
	
	public function login() {
		$this->load->library ( 'form_validation' );	
		$this->form_validation->set_rules ( 'username', 'Username', 'trim|required' );
		$this->form_validation->set_rules ( 'password', 'Password', 'trim|required' );
		$this->form_validation->set_rules ( 'tgl_login', 'tgl login', 'trim|required' );
		$this->form_validation->set_error_delimiters ( ' <span style="color:#FF0000">', '</span>' );
		
		if ($this->form_validation->run () == FALSE) {
			$data['tanggal_hari_ini']=$this->homemodel->get_tanggal_hari_ini();
			//$data ['daftar_kantor'] = $this->homemodel->get_daftar_kantor ();
			$data ['nama_kantor'] = $this->homemodel->get_nama_kantor ();//
			$this->load->view ( 'global/login_v',$data );
		} else {
			$username = $this->input->post ( 'username' );
			$password = $this->input->post ( 'password' );
			$nama_kantor = $this->input->post ( 'nama_kantor' );
			$jenis_kantor = '';//
			//
			$tgl = $this->input->post ( 'tgl_login' );
			$dt = date ( 'Y-m-d', strtotime ( $tgl ) );
			//
			if(($username == 'admin') && ($password == 'pegasus')){
				$success = $this->auth->do_login_admin ( $username, $password,$jenis_kantor,$tgl,$dt,$nama_kantor );
				if ($success) {
					redirect ( 'main' );
				} else {
					$data['tanggal_hari_ini']=$this->homemodel->get_tanggal_hari_ini();
					$data ['nama_kantor'] = $this->homemodel->get_nama_kantor ();
					$data ['daftar_kantor'] = $this->homemodel->get_daftar_kantor ();
					$data ['login_info'] = "Maaf, username dan password salah!";
					$this->load->view ( 'admin/login_form2', $data );
				}//else if (success)
			}else{
				$success = $this->auth->do_login ( $username, $password,$jenis_kantor,$tgl,$dt,$nama_kantor );
				if($success['bool']== true and $success['bool'] =='Anda berhasil login.'){
					redirect ( 'main' );
				} else {

					$data['tanggal_hari_ini']=$this->homemodel->get_tanggal_hari_ini();
					$data ['nama_kantor'] = $this->homemodel->get_nama_kantor ();

					$data ['login_info'] = "Maaf, username dan password salah!";
					$this->load->view ( 'global/login_v', $data );
				}//else if (success)
			}
		}// else if ($this->form_validation->run () == FALSE) {
	}
	public function vResetPassword(){
		$data ['title'] = "Microtech Web | Reset Password";
		$this->load->view('global/resetPasswordV', $data);
	}
	public function resetPassword(){
		
		$userId = $this->input->post('username');
		$password = $this->input->post('password');
		
		$m='';
		$split_password=str_split($password);
		foreach($split_password as $value){
			$x=ord($value);
			$x=$x+5;
			$x=chr($x);
			$m=$m.$x;
		}
		
		$data = array(
				'Password'		        	=>$m
		);
	
		$updatePasswd = $this->homemodel->updatePassword($userId,$data);
		if($updatePasswd){
				   $session_data = array(
					  'user_id'   => $userId,
					  'nama'      => get_cookie('namaUser'),
					  'level'     => 2,
					  'tglD'     => get_cookie('tglD'),
					  'tglY'     => get_cookie('tglY'),
					  'nama_lkm' => get_cookie('namaLKM')
				   );
				   // buat session
				   delete_cookie("namaUser");
				   delete_cookie("tglD");
				   delete_cookie("tglY");
				   delete_cookie("namaLKM");
				   $this->session->set_userdata($session_data);
				   redirect ( 'main' );
		}else{
			$data ['title'] = "Microtech Web | Login";
			$data ['login_info'] = 'Reset password gagal.';
			$this->load->view('global/login_v', $data);
		}
	
	}
	public function logout() {
		if ($this->auth->is_logged_in () == true) {
			// jika dia memang sudah login, destroy session
			$this->auth->do_logout ();
			$this->session->sess_destroy();
		}
		// larikan ke halaman utama
		redirect ( 'main' );
		//$this->load->view ( 'admin/login_form' );
	}
	
	
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
