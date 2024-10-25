<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->library('pagination');
        $this->load->model('Lelang_model');
        $this->load->model('User_model');

		if( !$this->session->userdata('email') && !$this->session->userdata('akses')) {
			$this->session->set_flashdata('message-danger', 'Login terlebih dahulu untuk mengakses sesi anda!');
			redirect('auth/login');
		}

		if($this->session->userdata('akses') != 1) {
			redirect('auth/blok');
		}
    }

	public function dataPengguna()
	{
		$email = $this->session->userdata('email');
		$data['dataPengguna'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
		$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
		$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
		$data['email'] = $email = $this->session->userdata('email');
		$data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
		// $data['sesiPengguna'] = $this->db->get('pengguna')->result_array();
        $this->load->library('pagination');

		$config['base_url'] = base_url('Admin/dataPengguna');
		$config['total_rows'] = $this->User_model->jumlahPenggunaSesi();
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;

		$this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['sesiPengguna'] = $this->User_model->getPengguna($config['per_page'], $data['start']);

		$data['title'] = 'Data Pengguna By Admin';
		$this->load->view('frontEnd/templates/header', $data);
		$this->load->view('frontEnd/templates/sidebar', $data);
		$this->load->view('frontEnd/templates/topbar', $data);
		$this->load->view('backEnd/admin/dataPengguna/dataPengguna', $data);
		$this->load->view('frontEnd/templates/footer');
	}

	public function lihatPelelang($id)
	{
		$email = $this->session->userdata('email');
		$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
		$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
		$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
		$data['email'] = $email = $this->session->userdata('email');
		$data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
		$data['dataPengguna'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$data['dataMobil'] = $this->db->get_where('lelang', ['id' => $id])->row_array();
		$data['dataPelelang'] = $this->db->get_where('daftar_lelang', ['id_mobil' => $id])->result_array();
		$data['dataLelang'] = $this->db->get('lelang')->result_array();
		$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();

		$data['title'] = 'Data Pelelang By Admin';
		$this->load->view('frontEnd/templates/header', $data);
		$this->load->view('frontEnd/templates/topbar', $data);
		$this->load->view('backEnd/admin/dataLelang/lihatPelelang', $data);
		$this->load->view('frontEnd/templates/footer');
	}

	public function hapusPelelang($id, $id_mobil)
	{
		$this->db->where('id_lelang', $id);
		$this->db->delete('daftar_lelang');

		$this->session->set_flashdata('message-success', 'Ajuan lelang berhasil dihapus!');
        redirect('admin/lihatPelelang/'.$id_mobil);
	}

	public function dataLelang()
	{
		$email = $this->session->userdata('email');
		$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
		$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
		$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
		$data['email'] = $email = $this->session->userdata('email');
		$data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
		$data['dataPengguna'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		// $data['sesiPengguna'] = $this->db->get('pengguna')->result_array();
        $this->load->library('pagination');

		$config['base_url'] = base_url('Admin/dataLelang');
		$config['total_rows'] = $this->Lelang_model->jumlahDataLelang();
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;

		$this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['dataMobil'] = $this->Lelang_model->getMobil($config['per_page'], $data['start']);
		$data['title'] = 'Data Pengguna By Admin';
		$this->load->view('frontEnd/templates/header', $data);
		$this->load->view('frontEnd/templates/sidebar', $data);
		$this->load->view('frontEnd/templates/topbar', $data);
		$this->load->view('backEnd/admin/dataLelang/dataLelang', $data);
		$this->load->view('frontEnd/templates/footer');
	}
}
