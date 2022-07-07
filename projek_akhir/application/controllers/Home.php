<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->model('faskes_model', 'faskes');
		$this->load->model('jenis_faskes_model', 'jenis_faskes');
		
		$data['jenis'] = $this->jenis_faskes->getAll();
		$data['list_faskes'] = $this->faskes->getAll();
		$data['faskes_rs'] = $this->faskes->getRS();
		$data['faskes_kg'] = $this->faskes->getKG();
		$data['faskes_ku'] = $this->faskes->getKU();
		$data['faskes_ps'] = $this->faskes->getPS();
		$data['faskes_ap'] = $this->faskes->getAP();

		$this->load->view('home/header.php');
		$this->load->view('home/article.php', $data);
		$this->load->view('home/footer.php');
	}

	public function detail()
	{
		$id = $this->input->get('id');
		$this->load->model('faskes_model', 'faskes');
		$this->load->model('komentar_model', 'komentar');
		$this->load->model('rating_model', 'rating');
		$data['data_faskes'] = $this->faskes->findById($id);
		$data['list_komentar'] = $this->komentar->showById($id);
		$data['rating'] = $this->rating->getAll();

		$this->load->view('home/header.php');
		$this->load->view('home/detail.php', $data);
		$this->load->view('home/footer.php');
	}

	public function edit()
	{
		$id = $this->input->get('id');
		$k_id = $this->input->get('k_id');
		$this->load->model('faskes_model', 'faskes');
		$this->load->model('komentar_model', 'komentar');
		$this->load->model('rating_model', 'rating');
		$data['data_faskes'] = $this->faskes->findById($id);
		$data['list_komentar'] = $this->komentar->showById($id);
		$data['rating'] = $this->rating->getAll();
		$data['edit_komentar'] = $this->komentar->getById($k_id);
		$data['data_rating'] = $this->rating->getAll();

		$this->load->view('home/header.php');
		$this->load->view('home/edit.php', $data);
		$this->load->view('home/footer.php');
	}

	public function create()
	{
		if ($this->session->has_userdata('USERNAME')) {
			$id_faskes = $this->input->get('id');
			$this->load->model('komentar_model', 'komentar');

			$komentar = $this->input->post('komentar');
			$username = $this->input->post('username');
			$faskes = $id_faskes;
			$nilai_rating = $this->input->post('nilai_rating');
			$idedit = $this->input->post('k_id');

			if (isset($idedit)) {
				$data_komentar[] = $komentar;
				$data_komentar[] = $nilai_rating;
				$data_komentar[] = $idedit;
				$this->komentar->edit($data_komentar);
			} else {
				$data_komentar[] = $komentar;
				$data_komentar[] = $username;
				$data_komentar[] = $faskes;
				$data_komentar[] = $nilai_rating;

				$this->komentar->create($data_komentar);
			}

			redirect(base_url() . 'index.php/home/detail?id=' . $id_faskes, 'refresh');
		} else {
			redirect(base_url('index.php/login'));
		}
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$this->load->model('komentar_model', 'komentar');
		$data = $this->komentar->getById($id);
		$faskes_id = $data->faskes_id;
		$this->komentar->delete($id);

		redirect(base_url().'index.php/home/detail?id='.$faskes_id, 'refresh');
	}
}
