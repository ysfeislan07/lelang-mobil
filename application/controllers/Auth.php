<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if( $this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('frontEnd/templates/header-login', $data);
            $this->load->view('frontEnd/auth/login');
            $this->load->view('frontEnd/templates/footer-login');    
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $login = $this->db->get_where('pengguna', ['email' => $email])->row_array();

            if(password_verify($password, $login['password'])) {
                $data = [
                    'email' => $login['email'],
                    'akses' => $login['akses']
                ];

                $this->session->set_userdata($data);

                if($login['akses'] == 1) {
                    redirect('menu');
                } else {
                    redirect('menu');
                }

            } else {
                redirect('auth/login');
            }
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pengguna.email]', [
            'is_unique' => 'Email sudah terdaftar dalam sesi!'
        ]);
        $this->form_validation->set_rules('telp', 'No. Handphone', 'required|trim|numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'Minimal 3 karakter!'
        ]);
        
        if( $this->form_validation->run() == false) {
            $data['title'] = 'Register';
            $this->load->view('frontEnd/templates/header-login', $data);
            $this->load->view('frontEnd/auth/register');
            $this->load->view('frontEnd/templates/footer-login');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 'User',
                'akses' => 2, 
                // 1 = admin 2 = user
                'data_dibuat' => date("d-m-Y")
            ];

            $this->db->insert('pengguna', $data);

            $this->session->set_flashdata('message-success', 'Berhasil mendaftarkan sesi anda. Silahkan login!');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('akses');
        redirect('auth/login');
    }

    public function blok()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('akses');
        $this->load->view('frontEnd/auth/blok');
    }
}