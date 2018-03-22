<?php
class M_kegiatan extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function ambil_mahasiswa($team_id){
		$sql = "SELECT *
				FROM mahasiswa
				WHERE id NOT IN
				(SELECT mahasiswa_id id
				 FROM detail_team
				 WHERE team_id = ?)";
		$query = $this->db->query($sql, array($team_id));
		$row = $query->result();

		return $row;
	}

}
?>