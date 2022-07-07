<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/header');
        $this->load->view('home/login');
    }

    public function autentikasi(){
        $this->load->model('user_model','user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->user->login($_username, $_password);

        if(isset($row)){ //jika username ada
            $this->session->set_userdata('ID',$row->id);
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('EMAIL',$row->email);
            $this->session->set_userdata('PASS',$row->password);
            $this->session->set_userdata('CREATED',$row->date);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USER',$row);
            
            if($this->session->userdata('ROLE') == 'administrator'){
                redirect(base_url().'index.php/admin/faskes');
                }
                else{
                redirect(base_url().'index.php/home');
                }
        }
        else{ //jika username atau password tidak ada
            redirect(base_url().'index.php/login?status=f');
        }
    }

    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url().'index.php/home');
    }

	public function createAccount()
	{
		$this->load->view('home/header.php');
		$this->load->view('home/register.php');
	}

    public function register()
    {
        $this->load->model('user_model', 'user');
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $role = $this->input->post('role');

        $data[] = $username;
        $data[] = $password;
        $data[] = $email;
        $data[] = $role;
        
        $this->user->register($data);

        $row = $this->user->login2($username, $password, $email, $role);

        $this->session->set_userdata('ID',$row->id);
        $this->session->set_userdata('USERNAME',$row->username);
        $this->session->set_userdata('EMAIL',$row->email);
        $this->session->set_userdata('PASS',$row->password);
        $this->session->set_userdata('CREATED',$row->date);
        $this->session->set_userdata('ROLE',$row->role);
        
        redirect(base_url().'index.php/home');
    }
}