<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MSekolah extends CI_Model{
	function __construct(){
		parent::__construct();
	}

		function getAllGrid($start,$limit,$sidx,$sord,$where){

    $this->db->select('id,npsn,nss,nama,jenjang,status,kota,kecamatan,desa,alamat_sekolah,nip_ks,nama_ks,update_status,keterangan');
    $this->db->limit($limit);
    if($where != NULL)$this->db->where($where,NULL,FALSE);
	  $this->db->order_by($sidx,$sord);
    $query = $this->db->get('Sekolah',$limit,$start);

    return $query->result();
  }

  function will_be_visited($param){
		$id = explode(',',$param);
		foreach($id as $value) {
					$sql_string = "UPDATE Sekolah SET keterangan= IF(keterangan='Akan Dikunjungi',NULL,'Akan Dikunjungi') WHERE id=$value";
					$this->db->query($sql_string);
		}
  }

    function has_visited($param){
		$id = explode(',',$param);
		foreach($id as $value) {
					$sql_string = "UPDATE Sekolah SET keterangan= IF(keterangan='Akan Dikunjungi','Telah Dikunjungi','Akan Dikunjungi') WHERE id=$value";
					$this->db->query($sql_string);
					echo $sql_string;
		}
  }
}