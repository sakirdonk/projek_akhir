<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function index()
	{
        $this->load->model('komentar_model', 'komentar');
        $data['list_komentar'] = $this->komentar->getAll();

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/komentar/index.php', $data);
		$this->load->view('layout/footer.php');
	}

    public function view()
	{
        $id = $this->input->get('id');
        $this->load->model('komentar_model', 'komentar');
        $data['list_komentar'] = $this->komentar->findById($id);

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/komentar/view.php', $data);
		$this->load->view('layout/footer.php');
    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('komentar_model', 'komentar');
        $this->komentar->delete($_id);

        redirect(base_url() . 'index.php/admin/komentar', 'refresh');
    }
}
