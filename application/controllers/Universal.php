<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universal extends CI_Controller {
	var $data;

	function __construct(){
		parent::__construct();
	}

	function index($modul) {
		$this->data['modul'] = $modul;
		$this->data['isi'] = $this->data['modul'] . "/index";
		$this->data['data'][$this->data['modul']] = $this->m_universal->get($this->data['modul']);

		$this->load->view("template/template", $this->data);
	}

	function tambah($modul) {
		$this->data['modul'] = $modul;
		$this->data['isi'] = $this->data['modul'] . "/tambah";

		$this->load->view("template/template", $this->data);	
	}

	function aksi_tambah($modul) {
		$this->data['modul'] = $modul;
		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = $value;
		}
		$this->m_universal->insert($this->data['modul'], $data);
		if ($modul == 'kegiatan') {
			redirect(base_url('universal/' . 'ubah/' . $this->data['modul'] . '/' . $this->db->insert_id()));
		} else {
			redirect(base_url('universal/' . 'index/' . $this->data['modul']));
		}
	}

	function ubah($modul, $id) {
		$this->data['modul'] = $modul;
		$this->data['isi'] = $this->data['modul'] . "/ubah";
		$this->data['data'][$this->data['modul']] = $this->m_universal->get_id($this->data['modul'], $id);
		
		$this->load->view("template/template", $this->data);
	}

	function aksi_ubah($modul) {
		$this->data['modul'] = $modul;
		foreach ($this->input->post('data') as $key => $value) {
			if ($key != 'id') {
				$data[$key] = $value;	
			} else {
				$id = $value;
			}
		}
		$this->m_universal->update($this->data['modul'], $data, $id);

		redirect(base_url('universal/' . 'index/' . $this->data['modul']));
	}

	function aksi_hapus($modul, $id) {
		if ($modul == 'kegiatan') {
			//hapus data anggota team
			foreach ($this->db->get_where('team', array('kegiatan_id' => $id))->result() as $item) {
				$this->db->delete('detail_team', array('team_id' => $item->id));
			}

			//hapus data team
			$this->db->delete('team', array('kegiatan_id' => $id));
		}

		$this->data['modul'] = $modul;
		$this->m_universal->delete(
			$this->data['modul'], $id
		);
		
		redirect(base_url('universal/' . 'index/' . $this->data['modul']));
	}

	//========================================================================================================

	function aksi_tambah_team() {
		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = $value;
		}
		$this->m_universal->insert('team', $data);
		
		$insert_id = $this->db->insert_id();

		move_uploaded_file($_FILES['bukti']['tmp_name'], 'uploads/bukti/' . $insert_id);
		move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/foto/' . $insert_id);

		redirect(base_url('universal/' . 'ubah/' . 'kegiatan' . '/' . $data['kegiatan_id']));
	}
}
