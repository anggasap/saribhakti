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


}

/* End of file kreditmodel.php */
/* Location: ./application/models/kreditmodel.php */