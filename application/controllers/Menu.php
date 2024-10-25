<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Lelang_model');
        $this->load->model('User_model');

		if( !$this->session->userdata('email') && !$this->session->userdata('akses')) {
			$this->session->set_flashdata('message-danger', 'Login terlebih dahulu untuk mengakses sesi anda!');
			redirect('auth/login');
		}
    }

	public function index()
	{
		$email = $this->session->userdata('email');
		$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$data['jumlahDataLelang'] = $this->Lelang_model->jumlahDataLelang();
		$data['jumlahPenggunaSesi'] = $this->User_model->jumlahPenggunaSesi();
		$data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
		$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
		$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
		$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
		$data['email'] = $email = $this->session->userdata('email');

		$data['title'] = 'Dashboard';
		$this->load->view('frontEnd/templates/header', $data);
		$this->load->view('frontEnd/templates/sidebar', $data);
		$this->load->view('frontEnd/templates/topbar', $data);
		$this->load->view('frontEnd/menu/dashboard', $data);
		$this->load->view('frontEnd/templates/footer');
	}
}
