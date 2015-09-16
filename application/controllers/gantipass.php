<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gantipass extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('homemodel');
        $this->load->model('gantiPassM');
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
            $this->gantipass();
        } else {
            $this->auth->restrict();
            $this->auth->cek_menu(7);
            $data ['multilevel'] = $this->usermodel->get_data(0, $this->session->userdata('level'));

            $this->template->set('title', 'Ganti Password');
            $this->template->load('template', 'global/gantiPassV', $data);
        }

    }
    function ubahpass()
    {
        $nasabahID = trim($this->input->post('userId'));
        $passwd = trim($this->input->post('passwd'));
        $m='';
        $split_password=str_split($passwd);
        foreach($split_password as $value){
            $x=ord($value);
            $x=$x+5;
            $x=chr($x);
            $m=$m.$x;
        }

        $data = array(
            'password' => $m
        );
        $model = $this->gantiPassM->updatePasswd($nasabahID,$data);

        if($model){
            $this->session->set_flashdata('success', 'Password berhasil diubah!');
            redirect('gantipass/home');
        }else{
            $this->session->set_flashdata('error', 'Password gagal diubah!');
            redirect('gantipass/home');
        }
    }


}

/* End of file main.php */
/* Location: ./application/controllers/kasumum.php */
