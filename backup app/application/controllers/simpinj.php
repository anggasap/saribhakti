<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Simpinj extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('homemodel');
        $this->load->model('simPinjM');
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
            $this->simulasiPinj();
        } else {
            $this->auth->restrict();
            $this->auth->cek_menu(5);
            $data ['multilevel'] = $this->usermodel->get_data(0, $this->session->userdata('level'));

            $this->template->set('title', 'Simulasi Pinjaman');
            $this->template->load('template', 'global/simPinjV', $data);
        }

    }

    function simulasiPinj()
    {
        $nasabahID = trim($this->input->post('userId'));
        $nama = trim($this->input->post('namaUser'));
        $typePinj = trim($this->input->post('optionsRadios'));
        $jmlPinj = trim($this->input->post('jumlahPinj'));
        $jmlPinj = str_replace(',', '', $jmlPinj);
        $jmlAngs = trim($this->input->post('jmlAngs'));
        $sukuBunga = trim($this->input->post('sukuBunga'));
/*
        $tgl = $this->input->post('tglMulai');
        $timestamp1 = strtotime($tgl);
        $tglMulai = date('Y-m-d', $timestamp1);

        $tgl = $this->input->post('tglAkhir');
        $timestamp2 = strtotime($tgl);
        $tglAkhir = date('Y-m-d', $timestamp2);

        $year1 = substr($tglMulai,0,4);
        $year2 = substr($tglAkhir,0,4);

        $month1 = substr($tglMulai,5,2);
        $month2 = substr($tglAkhir,5,2);




        $jmlBulan = (($year2 - $year1) * 12) + ($month2 - $month1);
*/
        //$jml_koma = $this->input->post('txtJml');
        //$jml = str_replace(',', '', $jml_koma);

        /*

        if ($jml <= 0) {
            $this->session->set_flashdata('error', 'Jumlah transaksi harus lebih dari nol');
            redirect('kasumum/kas_umum');
        } else {
            $this->kasmodel->insert_teller($data_kas);
            $this->kasmodel->add_counter($data);
            // kembalikan ke kas_umum_view
            $this->session->set_flashdata('success', 'Data berhasil diisimpan');
            redirect('kasumum/kas_umum');
        }
        */

        if(($typePinj==3 ) || ($typePinj==4 ) || ($typePinj==5 )){
            $angsuranPokok = $jmlPinj/$jmlAngs;
            $angsuranBunga = ($sukuBunga/100)/12 * $jmlPinj ;
            $data=array(
                'nasabahID'=>$nasabahID,
                'nama' =>$nama,
                'typePinj' => $typePinj,
                'jmlPinj'=>$jmlPinj,
                'jmlAngs'=>$jmlAngs,
                'sukuBunga'=>$sukuBunga,
                'angsPokok' => round($angsuranPokok),
                'angsBunga' => round($angsuranBunga)
            );
        }elseif($typePinj==1){
            $angsuranBunga= array();
            $angsuranPokok = $jmlPinj/$jmlAngs;
            for($i=0;$i<$jmlAngs;$i++){
                $angsuranBunga[$i] = ($sukuBunga/100)/12 * $jmlPinj ;
                $jmlPinj = $jmlPinj - $angsuranPokok;
                //$angsBef = $angsuranBunga[$i];
            }
            $data=array(
                'nasabahID'=>$nasabahID,
                'nama' =>$nama,
                'typePinj' => $typePinj,
                'jmlPinj'=>$jmlPinj,
                'jmlAngs'=>$jmlAngs,
                'sukuBunga'=>$sukuBunga,
                'angsPokok' => round($angsuranPokok),
                'angsBunga' => $angsuranBunga
            );

        }elseif($typePinj==2){
            $angsuranBunga = ($sukuBunga/100)/360 * $jmlPinj * ($jmlAngs) ;
            $data=array(
                'nasabahID'=>$nasabahID,
                'nama' =>$nama,
                'typePinj' => $typePinj,
                'jmlPinj'=>$jmlPinj,
                'jmlAngs'=>$jmlAngs,
                'sukuBunga'=>$sukuBunga,
                'angsPokok' => $jmlPinj,
                'angsBunga' => $angsuranBunga
            );
        }



        $this->session->set_flashdata('success', 'Data berhasil diisimpan');

        //$this->auth->restrict();
        //$this->auth->cek_menu(5);
        $data ['multilevel'] = $this->usermodel->get_data(0, $this->session->userdata('level'));
        $this->template->set('title', 'Hasil Simulasi Pinjaman');
        $this->template->load('template', 'global/hSimPinjV', $data);
    }

}

/* End of file main.php */
/* Location: ./application/controllers/kasumum.php */
