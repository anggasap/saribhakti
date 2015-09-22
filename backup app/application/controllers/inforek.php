<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inforek extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('homemodel');
		$this->load->model('infoRekM');
		session_start ();
	}

	public function index()
	{
		if($this->auth->is_logged_in () == false)
		{
			$this->login();
		}
		else
		{
			$data['multilevel'] = $this->usermodel->get_data(0,$this->session->userdata('level'));
			$data ['nama'] = $this->homemodel->get_nama_kantor ();
			$this->template->set ( 'title', 'home' );
			$this->template->load ( 'template', 'global/index',$data );
		}
	}



	public function home()
	{
		$this->auth->restrict ();
		$this->auth->cek_menu ( 4 );
		$data ['multilevel'] = $this->usermodel->get_data(0,$this->session->userdata('level'));
        $data['infoPinj'] = $this->infoRekM->getInfoPinjaman($this->session->userdata('user_id'));
        $data['infoTab'] = $this->infoRekM->getInfoTabungan($this->session->userdata('user_id'));
        $data['infoDep'] = $this->infoRekM->getInfoDeposito($this->session->userdata('user_id'));
		$this->template->set ( 'title', 'Info Rekening' );
		$this->template->load ( 'template', 'global/infoRekV', $data );
	}

}

/* End of file main.php */
/* Location: ./application/controllers/kasumum.php */
