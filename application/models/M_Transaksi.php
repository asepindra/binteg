<?php 

	class M_Transaksi extends CI_Model {

		function getAllPenerimaan($tgl_update = null) {

			$this->db->select("	Tanggal,
								KodeAkun,
								Saldo,
								/*DATE_FORMAT(tgl_update, '%Y/%m/%d %H:%i:%s') AS TanggalUpdate*/
								tgl_update AS TanggalUpdate
								");
			$this->db->from('penerimaan');
			if(!is_null($tgl_update))
				$this->db->where("DATE(tgl_update) = '$tgl_update'");
			return $this->db->get();
		}
		function getAllPengeluaran($tgl_update = null) {

			$this->db->select("	Tanggal,
								KodeAkun,
								Saldo,
								tgl_update AS TanggalUpdate
								");
			$this->db->from('pengeluaran');
			if(!is_null($tgl_update))
				$this->db->where("DATE(tgl_update) = '$tgl_update'");

			return $this->db->get();
		}
		function getAllSaldo($tgl_update = null) {

			$this->db->select("	Tanggal,
								kodeJenisRekening,
								NamaBank,
								Saldo,
								tgl_update AS TanggalUpdate
								");
			$this->db->from('saldo');
			if(!is_null($tgl_update))
				$this->db->where("DATE(tgl_update) = '$tgl_update'");
			return $this->db->get();
		}

		function insertPenerimaan($data)
		{
			$sql = $this->db->insert_string('penerimaan', $data) .
								"ON DUPLICATE KEY UPDATE
								  Saldo     = VALUES(Saldo),
								  tgl_update = VALUES(tgl_update)
								";		
			return $this->db->query($sql);
		}
		
		function insertPengeluaran($data)
		{
			$sql = $this->db->insert_string('pengeluaran', $data) .
								"ON DUPLICATE KEY UPDATE
								  Saldo     = VALUES(Saldo),
								  tgl_update = VALUES(tgl_update)
								";		
			return $this->db->query($sql);
		}		
		function insertSaldo($data)
		{
			$sql = $this->db->insert_string('saldo', $data) .
								"ON DUPLICATE KEY UPDATE
								  NamaBank     = VALUES(NamaBank),
								  Saldo     = VALUES(Saldo),
								  tgl_update = VALUES(tgl_update)
								";		
			return $this->db->query($sql);
		}		

		function getPengeluaranAkhir()
		{
			$this->db->select("*");
			$this->db->from('pengeluaran');
			$this->db->order_by("tgl_update","DESC");
			return $this->db->get()->row();

		}
		function getPenerimaanAkhir()
		{
			$this->db->select("*");
			$this->db->from('penerimaan');
			$this->db->order_by("tgl_update","DESC");
			return $this->db->get()->row();

		}
		function getSaldoAkhir()
		{
			$this->db->select("*");
			$this->db->from('saldo');
			$this->db->order_by("tgl_update","DESC");
			return $this->db->get()->row();

		}
	}

 ?>