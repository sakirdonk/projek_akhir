<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        $this->load->model('user_model', 'user');
        $data['list_user'] = $this->user->getAll();

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/user/index.php', $data);
		$this->load->view('layout/footer.php');
	}

    public function view()
	{
        $id = $this->input->get('id');
        $this->load->model('user_model', 'user');
        $data['list_user'] = $this->user->findById($id);

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/user/view.php', $data);
		$this->load->view('layout/footer.php');
    }

    public function create()
	{
        $this->load->model('user_model', 'user');
        $data['id_user'] = $this->user->countID();

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/user/create.php', $data);
		$this->load->view('layout/footer.php');
    }

	public function edit()
	{
        $id = $this->input->get('id');
        $this->load->model('user_model', 'user');
        $data['user'] = $this->user->findById($id);

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/user/update.php',$data);
		$this->load->view('layout/footer.php');
	}

	public function save()
	{
        $this->load->model('user_model', 'user');

		$_id = $this->input->post('id_user');
		$_username = $this->input->post('username');
		$_password = $this->input->post('password');
		$_email = $this->input->post('email');
		$_role = $this->input->post('role');
		$_idedit = $this->input->post('id');

        if(isset($_id)){
            $data_user[] = $_id;
        };

		$data_user[] = $_username;
		$data_user[] = $_password;
		$data_user[] = $_email;
		$data_user[] = $_role;
		
        if (isset($_idedit)) {
            //update
            $data_user[] = $_idedit; // ? 10
            $this->user->update($data_user);
            redirect(base_url('index.php/admin/user/view?id=') . $_idedit, 'refresh');
        } else {
            //fungsi save di mahasiswa_model
            $this->user->save($data_user);
            redirect(base_url('index.php/admin/user/view?id=') . $_id, 'refresh');
        };
	}

	public function delete()
	{
        $id = $this->input->get('id');
        $this->load->model('user_model', 'user');
		$this->user->delete($id);

		redirect(base_url('index.php/admin/user/index'), 'refresh');
	}
}
