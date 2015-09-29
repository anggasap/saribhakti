<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * Auth library
 */
class Auth{
   var $CI = NULL;
   function __construct(){
      // get CI's object
      $this->CI =& get_instance();
   }
   // untuk validasi login
	function do_login($username,$password,$jenis_kantor,$tgl,$dt,$nama_kantor){
		$username=strtoupper($username);
	    $password=strtoupper($password);
	    $nama_lkm = $nama_kantor;
	    $tgl=$tgl;
	    $dt=$dt;
      // cek di database, ada ga?
        $this->CI->db->from('nasabah');
        $this->CI->db->where('nasabah_id',$username);
	    $result = $this->CI->db->get();
        if($result->num_rows() == 1){  
	   		$hasil=$result->result ();
		  	foreach ( $hasil as $row ){  
				$arr = array (
					'usr' => $row->nasabah_id,
					'namaNasabah'=>$row->nama_nasabah,		
					'pwd' => $row->password
				);
			}
			$m='';
		  	$split_password=str_split($arr['pwd']);
		  	foreach($split_password as $value){
				$x=ord($value);
			    $x=$x-5;
			    $x=chr($x);
			    $m=$m.$x;
		  	}  
			//$m = passowor dr sql
			if($password==$m){
				if($m == '111111'){		 
					$this->CI->load->helper('cookie');
					$cookie1 = array(
							'name'   => 'userId',
							'value'  => $arr['usr'],
							'expire' => time()+86500
					);
					set_cookie($cookie1);
					$cookie2 = array(
							'name'   => 'namaUser',
							'value'  => $arr['namaNasabah'],
							'expire' => time()+86500
					);
					set_cookie($cookie1);
					$cookie3 = array(
							'name'   => 'namaLKM',
							'value'  => $nama_lkm,
							'expire' => time()+86500
					);
					$cookie4 = array(
							'name'   => 'tglD',
							'value'  => $tgl,
							'expire' => time()+86500
					);
					$cookie5 = array(
							'name'   => 'tglY',
							'value'  => $dt,
							'expire' => time()+86500
					);
					set_cookie($cookie1);
					set_cookie($cookie2);
					set_cookie($cookie3);
					set_cookie($cookie4);
					set_cookie($cookie5);
					
					redirect('main/vResetPassword');
			    }else{// end if $m=='111111'
			    	$session_data = array(
			    			'user_id'   => $arr['usr'],
			    			'nama'      => $arr['namaNasabah'],
			    			'level'     => 2,
			    			'tglD'     => $tgl,
			    			'tglY'     => $dt,
			    			'nama_lkm' => $nama_lkm
			    	);
			    	// buat session
			    	
			    	$this->CI->session->set_userdata($session_data);
			    	
			    	$data_auth = array(
			    			'pesan'   => "Anda berhasil login.",
			    			'bool'   => true
			    	);
			    	return $data_auth;
			    }
		    }else{//if($password==$m){
			  $data_auth = array(
			    			'pesan'   => "Password anda salah.",
			    			'bool'   => false
			    	);
			  return $data_auth;
			//  die("Maaf, Anda tidak berhak untuk mengakses halaman ini.");
		  }
	  }else{ //end if($result->num_rows() == 1){
		  return false;
	  }
	 
   }// end function
   
   
   
   
   
   function do_login_admin($username,$password,$jenis_kantor,$tgl,$dt,$nama_kantor){
	   $nama_lkm = $nama_kantor;
	   $tgl=$tgl;
	   $dt=$dt;
      
				/*==*/
				/* $this->CI->db->from('web_cabang');
				$this->CI->db->where('kode_cab',$jenis_kantor);
				$result2 = $this->CI->db->get();
				$userdata_kantor =  $result2->row();
				$kantor = $userdata_kantor->nama_cabang;
				$lokasi = $userdata_kantor->lokasi_cabang;
				
				   $session_data = array(
					  'user_id'   => '0',
					  'nama'      => $username,
					  'level'     => 2,//$userdata->STATUS_USER
					  'kantor'     => $kantor,
					  'kodekantor'     => $jenis_kantor,
					  'lokasi'     => $lokasi,
					  'tglD'     => $tgl,
					  'tglY'     => $dt,
					  'nama_lkm' => $nama_lkm
				   ); */
	   
				   // buat session
				   
	   $session_data = array(
	   		'user_id'   => $username,
	   		'nama'      => 'Administrator Sistem',
	   		'level'     => 1,
	   		'tglD'     => $tgl,
	   		'tglY'     => $dt,
	   		'nama_lkm' => $nama_lkm
	   );
	   $this->CI->session->set_userdata($session_data);
	   return true;
   }
   // untuk mengecek apakah user sudah login/belum
   function is_logged_in(){
      if($this->CI->session->userdata('user_id') == ''){
         return false;
      }
		  return true;
   }
   // untuk validasi di setiap halaman yang mengharuskan authentikasi
   function restrict()
   {
      if($this->is_logged_in() == false)
      {
         redirect('main/login');
      }
   }
   
   // untuk mengecek menu
  function cek_menu($idmenu)
  {
	 $this->CI->load->model('usermodel');
	 $status_user = $this->CI->session->userdata('level');
	 $allowed_level = $this->CI->usermodel->get_array_menu($idmenu);
	 if(in_array($status_user,$allowed_level) == false)
	 {
		die("Maaf, Anda tidak berhak untuk mengakses halaman ini.");
	 }
  }
  
  // untuk logout
  function do_logout()
  {
	 $this->CI->session->sess_destroy();
	 session_destroy();
  }
  

}