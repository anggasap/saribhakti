<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class ResetPassM extends CI_Model
{
	public function getNasabahAll()
	{
		$sql="SELECT nasabah_id,nama_nasabah,alamat,no_id from nasabah order by nasabah_id asc";
		$query=$this->db->query($sql);
		return $query->result(); // returning rows, not row
	}
    public function updatePasswd($nasabahID,$data)
    {
        $query1 = $this->db->where('nasabah_id', $nasabahID);
        $query2 = $this->db->update('nasabah', $data);
        if($query1 && $query2){
            return true;
        }else{
            return false;
        }

    }


}

/* End of file kreditmodel.php */
/* Location: ./application/models/kreditmodel.php */