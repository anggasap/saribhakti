<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Resetpass extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('homemodel');
        $this->load->model('resetPassM');
        session_start();
    }

    public function index()
    {
        if ($this->auth->is_logged_in() == false) {
            $this->login();
        } else {
            $data['multilevel'] = $this->usermodel->get_data(0, $this->session->userdata('level'));
            $data ['nama'] = $this->homemodel->get_nama_kantor();
            $this->template->set('title', 'home');
            $this->template->load('template', 'global/index', $data);
        }
    }


    public function home()
    {
        if (isset($_POST["btnSave"])) {
            $this->resetpass();
        } else {
            $this->auth->restrict();
            $this->auth->cek_menu(9);
            $data ['multilevel'] = $this->usermodel->get_data(0, $this->session->userdata('level'));

            $this->template->set('title', 'Reset Password');
            $this->template->load('tempDataTable', 'global/resetPassV', $data);
        }

    }
    public function getNasabahAll(){
    	$this->CI =& get_instance();//and a.kcab_id<>'1100'
    	$rows = $this->resetPassM->getNasabahAll();
    	$data['data'] = array();
    	foreach( $rows as $row ) {
    
    		$array = array(
    				'nasabah_id' => trim($row->nasabah_id),
    				'nama_nasabah' => trim($row->nama_nasabah),
    				'alamat' =>  trim($row->alamat),
    				'no_id'    => trim($row->no_id)
    
    		);
    
    		array_push($data['data'],$array);
    	}
    	//echo json_encode($data['data']);
    	$this->output->set_output(json_encode($data));
    }
    function resetpass()
    {
         $nasabahID = trim($this->input->post('userId'));
        /*
         $passwd = trim($this->input->post('passwd'));
        $m='';
        $split_password=str_split($passwd);
        foreach($split_password as $value){
            $x=ord($value);
            $x=$x+5;
            $x=chr($x);
            $m=$m.$x;
        } */

        $data = array(
            'password' => '666666'
        );
        $model = $this->resetPassM->updatePasswd($nasabahID,$data);

        if($model){
            $this->session->set_flashdata('success', 'Password berhasil direset!');
            redirect('resetpass/home');
        }else{
            $this->session->set_flashdata('error', 'Password gagal direset!');
            redirect('resetpass/home');
        }
    }


}

/* End of file main.php */
/* Location: ./application/controllers/kasumum.php */
