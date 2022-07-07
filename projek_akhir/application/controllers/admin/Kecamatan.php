<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

	public function index()
	{
        $this->load->model('kecamatan_model', 'kecamatan');
        $data['list_kecamatan'] = $this->kecamatan->getAll();

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/kecamatan/index.php', $data);
		$this->load->view('layout/footer.php');
	}

    public function create()
	{

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/kecamatan/create.php');
		$this->load->view('layout/footer.php');
	}

	public function save()
	{
        $this->load->model('kecamatan_model', 'kecamatan');

		$_kecamatan = $this->input->post('kecamatan');

        $data_kecamatan[] = $_kecamatan;
		
        //fungsi save di mahasiswa_model
        $this->kecamatan->save($data_kecamatan);

        redirect(base_url('index.php/admin/kecamatan'));
	}
}