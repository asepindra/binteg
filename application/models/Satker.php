<?php 

	class Satker extends CI_Model {

		var $tb;

		function __construct()
		{
			$this->tb = 'satker';
		}

		function getAllSatker($tgl_update = null) {

			$this->db->select("	kode_satker,
								tahun,
								bulan,
								kd_fakultas AS kode_fakultas,
								kode_program_studi,
								kode_akreditasi,
								kode_jurusan,
								DATE_FORMAT(tgl_update, '%Y/%m/%d %H:%i:%s') AS tanggal_update
								");
			$this->db->from($this->tb);
			if(!is_null($tgl_update))
				$this->db->where("DATE(tgl_update) = '$tgl_update'");
			return $this->db->get();
		}
		function getAllSatkerLainnya($tgl_update) {

			$this->db->select("	kode_satker,
								tahun,
								bulan,
								indikator,
								jumlah,
								DATE_FORMAT(tgl_update, '%Y/%m/%d %H:%i:%s') AS tanggal_update
								");
			$this->db->from('satker_lainnya');
			$this->db->where("DATE(tgl_update) = '$tgl_update'");
			return $this->db->get();
		}
		function insertSatker($data)
		{
			$sql = $this->db->insert_string('satker', $data) .
								"ON DUPLICATE KEY UPDATE
								  tahun     = VALUES(tahun),
								  bulan     = VALUES(bulan),
								  kd_fakultas     = VALUES(kd_fakultas),
								  kode_program_studi     = VALUES(kode_program_studi),
								  kode_akreditasi     = VALUES(kode_akreditasi),
								  kode_jurusan     = VALUES(kode_jurusan),
								  tgl_update = VALUES(tgl_update)
								";		
			return $this->db->query($sql);
		}
		
	}

 ?>