<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskes extends CI_Controller {

	public function index()
	{
        $this->load->model('faskes_model', 'faskes');
        $data['list_faskes'] = $this->faskes->getAll();

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/faskes/index', $data);
		$this->load->view('layout/footer.php');
	}

    public function create()
    {
        $this->load->model('faskes_model', 'faskes');
        $this->load->model('jenis_faskes_model', 'jenis_faskes');
        $this->load->model('kecamatan_model', 'kecamatan');
        $data['jenis_faskes'] = $this->jenis_faskes->getAll();
        $data['kecamatan'] = $this->kecamatan->getAll();
        $data['id_faskes'] = $this->faskes->countID();

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/faskes/create', $data);
		$this->load->view('layout/footer.php');
    }

    public function view()
    {
        $id = $this->input->get('id');
        $this->load->model('faskes_model', 'faskes');
        $data['list_faskes'] = $this->faskes->findById($id);

		$this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/faskes/view', $data);
		$this->load->view('layout/footer.php');
    }

    public function upload1()
    {
        $this->load->model('faskes_model', 'faskes');

        $config['upload_path']          = './fotos/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 1000;
        $config['max_width']            = 2624;
        $config['max_height']           = 2468;

        $_id = $this->input->post('id');

        $array = explode('.', $_FILES['fotofaskes']['name']);
        $extension = end($array);

        $new_name = $_id.'1.'.$extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('fotofaskes'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                //$this->load->view('upload_success', $data);
                $data_foto[] = $new_name;
                $data_foto[] = $_id;
                $this->faskes->uploadFoto1($data_foto);
        }
        
        redirect(base_url('index.php/admin/faskes/view?id=') . $_id, 'refresh');
    }

    public function upload2()
    {
        $this->load->model('faskes_model', 'faskes');

        $config['upload_path']          = './fotos/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 1000;
        $config['max_width']            = 2624;
        $config['max_height']           = 2468;

        $_id = $this->input->post('id');

        $array = explode('.', $_FILES['fotofaskes']['name']);
        $extension = end($array);

        $new_name = $_id.'2.'.$extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('fotofaskes'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                //$this->load->view('upload_success', $data);
                $data_foto[] = $new_name;
                $data_foto[] = $_id;
                $this->faskes->uploadFoto2($data_foto);
        }
        
        redirect(base_url('index.php/admin/faskes/view?id=') . $_id, 'refresh');
    }

    public function upload3()
    {
        $this->load->model('faskes_model', 'faskes');

        $config['upload_path']          = './fotos/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 1000;
        $config['max_width']            = 2624;
        $config['max_height']           = 2468;

        $_id = $this->input->post('id');

        $array = explode('.', $_FILES['fotofaskes']['name']);
        $extension = end($array);

        $new_name = $_id.'3.'.$extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('fotofaskes'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
                //die(print_r($error));
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                //$this->load->view('upload_success', $data);
                $data_foto[] = $new_name;
                $data_foto[] = $_id;
                $this->faskes->uploadFoto3($data_foto);
        }
        
        redirect(base_url('index.php/admin/faskes/view?id=') . $_id, 'refresh');
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $this->load->model('faskes_model', 'faskes');
        $this->load->model('jenis_faskes_model', 'jenis_faskes');
        $this->load->model('kecamatan_model', 'kecamatan');
        $data['list_faskes'] = $this->faskes->findById($id);
        $data['jenis_faskes'] = $this->jenis_faskes->getAll();
        $data['kecamatan'] = $this->kecamatan->getAll();

        $this->load->view('layout/header.php');
		$this->load->view('layout/sidebar.php');
        $this->load->view('admin/faskes/update', $data);
		$this->load->view('layout/footer.php');

        //redirect(base_url('index.php/faskes/view.php'));
    }

    public function save()
    {
        $this->load->model('faskes_model', 'faskes');

        $_id = $this->input->post('id_faskes');
        $_nama = $this->input->post('nama_faskes');
        $_alamat = $this->input->post('alamat');
        $_latlong = $this->input->post('latlong');
        $_jenis = $this->input->post('jenis_faskes');
        $_deskripsi = $this->input->post('deskripsi');
        $_skor_rating = $this->input->post('rating');
        $_kecamatan_id = $this->input->post('kecamatan');
        $_website = $this->input->post('website');
        $_jumlah_dokter = $this->input->post('jumlah_dokter');
        $_jumlah_pegawai = $this->input->post('jumlah_pegawai');
        $_idedit = $this->input->post('id'); //hidden field

        if(isset($_id)){
            $data_faskes[] = $_id;
        };

        $data_faskes[] = $_nama; // ? 1
        $data_faskes[] = $_alamat; // ? 2
        $data_faskes[] = $_latlong; // ? 3
        $data_faskes[] = $_jenis; // ? 4
        $data_faskes[] = $_deskripsi; // ? 5
        $data_faskes[] = $_skor_rating; // ? 6
        $data_faskes[] = $_kecamatan_id; // ? 7
        $data_faskes[] = $_website; // ? 8
        $data_faskes[] = $_jumlah_dokter; // ? 9
        $data_faskes[] = $_jumlah_pegawai; // ? 10

        if (isset($_idedit)) {
            //update
            $data_faskes[] = $_idedit; // ? 11
            $this->faskes->update($data_faskes);
            redirect(base_url('index.php/admin/faskes/view?id=') . $_idedit, 'refresh');
        } else {
            //fungsi save di mahasiswa_model
            $this->faskes->save($data_faskes);
            redirect(base_url('index.php/admin/faskes/view?id=') . $_id, 'refresh');
        };

        

    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('faskes_model', 'faskes');
        $this->faskes->delete($_id);

        redirect(base_url() . 'index.php/admin/faskes', 'refresh');
    }
}
