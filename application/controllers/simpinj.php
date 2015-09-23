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
        $jumlahPinj = number_format($jmlPinj,2);
        $jmlAngs = trim($this->input->post('jmlAngs'));
        $sukuBunga = trim($this->input->post('sukuBunga'));


        if(($typePinj==3 ) || ($typePinj==4 ) || ($typePinj==5 )){
            $angsuranPokok = $jmlPinj/$jmlAngs;
            $angsuranBunga = ($sukuBunga/100)/12 * $jmlPinj ;
            $data=array(
                'nasabahID'=>$nasabahID,
                'nama' =>$nama,
                'typePinj' => $typePinj,
                'jmlPinj'=>$jumlahPinj,
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
            
            $gajiPokok  = trim($this->input->post('gajiPokok'));
            $gajiPokok  = str_replace(',', '', $gajiPokok);

            $potPerush  = trim($this->input->post('potPerush'));
            $potPerush  = str_replace(',', '', $potPerush);

            $gajiPokok13      = 1/3 * $gajiPokok;
            $mNoRek  = $this->simPinjM->getRekKredit($nasabahID);;//
            $cNoRek  = $mNoRek[0]->no_rekening;
            
            $kewajibanBayar = 0;
            $tglTrans = date('Y-m-d',strtotime($this->input->post ( 'tglTrans')));
            
            //No Rekening selain cadangan dan terencana
            $noRekEx = $this->simPinjM->getRekKredit($nasabahID);
            foreach($noRekEx as $cNoRek){
            	$noRekKre = $cNoRek->no_rekening;
            	$rows = $this->simPinjM->getNilaiTagihan( $noRekKre,$tglTrans );
            	foreach ( $rows as $row )
            		$array1 = array (
            				'Jpokok' => $row->JPokok,
            				'Jbunga' => $row->JBunga,
            				'Jdenda' => $row->JDenda,
            				'Jadmin' => $row->JAdmin,
            				'Ladmin' => $row->LAdmin
            		);
            		$rows2 = $this->simPinjM->getNilaiSudahBayar( $noRekKre );
            		foreach ( $rows2 as $row2 )
            			$array2 = array (
            					'Bpokok' => $row2->BPokok,
            					'Bbunga' => $row2->BBunga,
            					'Bdenda' => $row2->BDenda,
            					'Badmin' => $row2->BAdmin,
            					'Padmin' => $row2->PAdmin
            			);
            		$pokok_angsur=$array1['Jpokok']-$array2['Bpokok'];
            		$bunga_angsur=$array1['Jbunga']-$array2['Bbunga'];
            		$kewajiban	= $pokok_angsur + $bunga_angsur;
            		$kewajibanBayar	= $kewajibanBayar + $kewajiban; 
            		

            }//foreach($noRekEx as $cNoRek){
            if($kewajibanBayar<0){
            	$kewajibanBayar=0;
            }
            $kbPlusBunga = $gajiPokok13-$potPerush-$kewajibanBayar;//$e
            $tglBuka = $this->simPinjM->getTglBuka( $nasabahID );
            $tglBuka = $tglBuka[0]->tgl_buka;
            $date1	= strtotime($tglBuka);//$tglBuka;
            $date2 = strtotime($this->input->post ( 'tglTrans'));
            
            $diff = abs($date2 - $date1);
            
            $bulan = floor($diff / (365*60*60*24)) *12;
            
            if($bulan>13 && $bulan<=36){
            	$kali = 5;
            }elseif($bulan>37 && $bulan<=48){
            	$kali = 8;
            }elseif($bulan>49 && $bulan<=60){
            	$kali = 13;
            }elseif($bulan>61 && $bulan<=72){
            	$kali = 19;
            }elseif($bulan>73){
            	$kali = 30;
            }else{
            	$kali = 1;
            }
            
            $fKbBersih = trim($this->input->post('fkb'))/100;
            $kbBersih = $fKbBersih *$kbPlusBunga;
            $maxPinj = $kbBersih * $kali;
            $data=array(
            		'nasabahID'=>$nasabahID,
            		'nama' =>$nama,
            		'typePinj' => $typePinj,
            		'jmlPinj'=>$jumlahPinj,
            		'skBunga'=>$sukuBunga,
            		'jmlAngs'=>$jmlAngs,
            		'sukuBunga'=>$sukuBunga,
            		'angsPokok' => round($angsuranPokok),
            		'angsBunga' => $angsuranBunga,
            		'kewajiban'	=> $kewajibanBayar,//$d
            		'gajiPokok'=> $gajiPokok,//$a
            		'gajiPokok13'=>$gajiPokok13,//$b
            		'potPerush'=> $potPerush,//$c
            		'kbPlusBunga'	=>$kbPlusBunga,//$e
            		'kbBersih'=>$kbBersih,
            		'maxPinj'=>$maxPinj
            );
            
            
            				
        }elseif($typePinj==2){
            $angsuranBunga = ($sukuBunga/100)/360 * $jmlPinj * ($jmlAngs) ;
            $data=array(
                'nasabahID'=>$nasabahID,
                'nama' =>$nama,
                'typePinj' => $typePinj,
                'jmlPinj'=>$jumlahPinj,
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
