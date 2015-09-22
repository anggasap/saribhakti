<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class SimPinjM extends CI_Model
{
    public function getInfoPinjaman($nasabahID)
    {
        $sql = "Select DATAMASTER.No_Rekening as norek, DESKRIPSI_JENIS_KREDIT, DATAMASTER.SUKU_BUNGA_PER_TAHUN,DATAMASTER.BI_JANGKA_WAKTU, DATAMASTER.TGL_JATUH_TEMPO,  Sum(if(floor(my_kode_trans/100) = 1, POKOK_TRANS,0)) - Sum(if(floor(my_kode_trans/100) = 3,
POKOK_TRANS,0)) as POKOKAKHIR,
       Sum(if(floor(my_kode_trans/100) = 2, BUNGA_TRANS,0)) - Sum(if(floor(my_kode_trans/100) = 3,
BUNGA_TRANS,0)) as BUNGAAKHIR
From KRETRANS,
     (SELECT KREDIT.NO_REKENING, DESKRIPSI_JENIS_KREDIT, KREDIT.SUKU_BUNGA_PER_TAHUN,KREDIT.BI_JANGKA_WAKTU,KREDIT.TGL_JATUH_TEMPO
      FROM KREDIT,KODEJENISKREDIT
      Where  KREDIT.JENIS_PINJAMAN = KODEJENISKREDIT.KODE_JENIS_KREDIT
      And KREDIT.NASABAH_ID = '$nasabahID'
      ) DATAMASTER
WHERE DATAMASTER.No_Rekening = KRETRANS.NO_REKENING
GROUP BY DATAMASTER.NO_REKENING ";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function getRekKredit($nasabahId){
        $sql = "select no_rekening from kredit where nasabah_id = '$nasabahId' 
        and (jenis_pinjaman='03' or jenis_pinjaman='04' or jenis_pinjaman='05')";
        $query = $this->db->query($sql);
        return $query->result();
    }
	public function get_nilai_tagihan_pokok($kode,$tglsys) {
    	$sql="SELECT kredit.type_pinjaman,kredit.denda_per_angsuran,kredit.tgl_realisasi,kredit.satuan_waktu_angsuran,
		         kredit.pokok_tunggakan_awal +
	             sum(if(floor(my_kode_trans/100)=2,pokok_trans,0)) as JPokok,
		         kredit.bunga_tunggakan_awal - kredit.bunga_disc_awal +
		         sum(if(floor(my_kode_trans/100)=2,bunga_trans,0)) as JBunga,
		         kredit.denda_tunggakan_awal - kredit.denda_disc_awal +
		         sum(if(floor(my_kode_trans/100)=2,denda_trans,0)) as JDenda,
		         kredit.admin_tunggakan_awal - kredit.admin_disc_awal +
		         sum(if(floor(my_kode_trans/100)=2,admin_trans,0)) as JAdmin,
		         sum(if(floor(my_kode_trans/100)=8,adminlain_trans,0)) as LAdmin
		         from kredit left join kretrans on kredit.no_rekening=kretrans.no_rekening
		         AND kretrans.tgl_trans<='".$tglsys."'
		         WHERE kredit.no_rekening='".$kode."' group by kretrans.no_rekening";
    	$query = $this->db->query($sql);
    	return $query->result ();
    }
    public function get_nilai_sudah_bayar($kode) {
    	$sql="SELECT kredit.type_pinjaman,kredit.denda_per_angsuran,kredit.tgl_realisasi,kredit.satuan_waktu_angsuran, 
    			sum(if(floor(my_kode_trans/100)=3 and my_kode_trans <> 395,pokok_trans,0)) + 
    			sum(if(floor(my_kode_trans/100)=3 and my_kode_trans <> 395,Disc_Pokok,0)) as BPokok, 
    			sum(if(floor(my_kode_trans/100)=3 and my_kode_trans <> 395,bunga_trans,0))+ 
    			sum(if(floor(my_kode_trans/100)=3,Disc_Bunga,0)) as BBunga, 
    			sum(if(floor(my_kode_trans/100)=3,denda_trans,0))+ 
    			sum(if(floor(my_kode_trans/100)=3,disc_denda,0)) as BDenda, 
    			sum(if(floor(my_kode_trans/100)=3,admin_trans,0))+ 
    			sum(if(floor(my_kode_trans/100)=3,disc_admin,0)) as BAdmin,
    			sum(if(floor(my_kode_trans/100)=3,adminlain_trans,0)) as PAdmin 
    			from kredit left join kretrans on kredit.no_rekening=kretrans.no_rekening 
    			WHERE kredit.no_rekening='".$kode."' group by kretrans.no_rekening ";
    	$query = $this->db->query($sql);
    	return $query->result ();
    }


}

/* End of file kreditmodel.php */
/* Location: ./application/models/kreditmodel.php */