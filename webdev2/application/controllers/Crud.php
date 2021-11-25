<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('Bio_model');
        if($this->session->userdata('status') != "login") {
            redirect('login');
        }
    }

    public function index() 
    {       
        $data = array(
            'popups' => '',
            'get_ref' => '');
        $this->load->view('welcome_message', $data);
    }


    /*
    HANDLER SYSTEM TAMBAH
    */
    public function tambah()
    {
        $data = array(
            'popups' => 'components/v_input',
            'get_ref' => 'reg',
            'user' => '');
        $this->load->view('welcome_message', $data);
    }
    public function tambah_data_Bio() 
    {
            $nama = $this->input->post('nama', true);
            $jenis_kelamin = $this->input->post('jenis_kelamin', true);
            $tanggal_lahir = $this->input->post('tanggal_lahir', true);
            $umur = $this->input->post('umur', true);
            $data = array(
                'nama' => $nama == NULL ? NULL : $nama,
                'jenis_kelamin' => $jenis_kelamin == NULL ? NULL : $jenis_kelamin,
                'tanggal_lahir' => $tanggal_lahir == NULL ? NULL : $tanggal_lahir,
                'umur' => $umur == NULL ? NULL : $umur
            );

            $this->Bio_model->input_data('bio', $data);
            redirect('crud');
    
    }


    /*
    HANDLER SYSTEM EDIT
    */

    public function ubah() 
    {
        $data = array(
            'user' => $this->Bio_model->gets_data('bio', $_GET['id']),
            'popups' => 'components/v_edit',
            'get_ref' => 'ch');
            $user = $data['user'];

        $this->load->view('welcome_message', $data);
    }
    public function ubah_data_Bio()
    {
        $nama = $this->input->post('nama', true);
        $tanggal_lahir = $this->input->post('tanggal_lahir', true);
        $umur = $this->input->post('umur', true);
        $id = $this->input->post('id', true);
        $data = array(
            'nama' => $nama,
            'tanggal_lahir' => $tanggal_lahir,
            'umur' => $umur
        );
        $this->Bio_model->update_data('bio', $id, $data);
        redirect('crud');
    }
    /*
    HANDLER SYSTEM HAPUS
    */
    public function hapus()
    {
        $this->Bio_model->drop_data('bio', $_GET['id']);
        redirect('crud');
    }

    public function uploaders()
    {
        $data = array(
            'popups' => 'components/v_uploads',
            'get_ref' => 'up',
            'user' => array('error' => ''),
        );
        $this->load->view('welcome_message', $data);
    }
    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (! $this->upload->do_upload('userfile')) {
            $err = array('error' => '<strong class="subtitle">[ERROR] :</strong>'.$this->upload->display_errors());
            $data = array(
                'popups' => 'components/v_uploads',
                'get_ref' => 'up',
                'user' => $err,
            );
            $this->load->view('welcome_message', $data);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('components/upload_success', $data);
        }
    }

    public function logout_session() {
        $log = array(
            'heads' => 'KELUAR',
            'desc' => 'Apakah yakin ingin keluar ?', // TODO dialog form
        );
        $data = array(
            'popups' => 'components/dialog',
            'get_ref' => 'out',
            'user' => $log
        );
        $this->load->view('welcome_message', $data);
    }
    
}