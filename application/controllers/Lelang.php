<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lelang extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Lelang_model');

		if( !$this->session->userdata('email')) {
			$this->session->set_flashdata('message-danger', 'Login terlebih dahulu untuk mengakses sesi anda!');
			redirect('auth/login');
		}
    }

	public function index()
	{
		$kategori = $this->input->post('kategori');

		if($kategori == 'Sedan') {
			$data['dataLelang'] = $this->db->get_where('lelang', ['kategori' => 'Sedan'])->result_array();
		} elseif($kategori === 'Sedan Hybrid') {
			$data['dataLelang'] = $this->db->get_where('lelang', ['kategori' => 'Sedan Hybrid'])->result_array();
		} elseif($kategori === 'MPV') {
			$data['dataLelang'] = $this->db->get_where('lelang', ['kategori' => 'MPV'])->result_array();
		} elseif($kategori === 'MPV Hybrid') {
			$data['dataLelang'] = $this->db->get_where('lelang', ['kategori' => 'MPV Hybrid'])->result_array();
		} elseif($kategori === 'SUV') {
			$data['dataLelang'] = $this->db->get_where('lelang', ['kategori' => 'SUV'])->result_array();
		} elseif($kategori === 'SUV Hybrid') {
			$data['dataLelang'] = $this->db->get_where('lelang', ['kategori' => 'SUV Hybrid'])->result_array();
		} elseif($kategori === 'D Cab') {
			$data['dataLelang'] = $this->db->get_where('lelang', ['kategori' => 'D Cab'])->result_array();
		} elseif($kategori === 'Hatchback') {
			$data['dataLelang'] = $this->db->get_where('lelang', ['kategori' => 'Hatchback'])->result_array();
		} elseif($kategori === 'Hatchback Hybrid') {
			$data['dataLelang'] = $this->db->get_where('lelang', ['kategori' => 'Hatchback Hybrid'])->result_array();
		} else {
			$data['dataLelang'] = $this->db->order_by('sesi_lelang', 'ASC')->get('lelang')->result_array();
		}

		$email = $this->session->userdata('email');
		$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
		$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
		$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
		$data['email'] = $this->session->userdata('email');
		$data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
		$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$data['title'] = 'Menu Lelang';
		$this->load->view('frontEnd/templates/header', $data);
		$this->load->view('frontEnd/templates/topbar', $data);
		$this->load->view('frontEnd/lelang/lelang', $data);
		$this->load->view('frontEnd/templates/footer');
	}

	public function detailLelang($id)
	{
		$detailLelang = $this->db->get_where('lelang', ['id' => $id])->row_array();
		if( $detailLelang['sesi_lelang'] == 1 && $this->session->userdata('akses') == 2) {
			$this->session->set_flashdata('message-danger', 'Lelang telah habis waktunya!');
            redirect('lelang');
		} else {
			$email = $this->session->userdata('email');
			$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
			$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
			$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
			$data['email'] = $email = $this->session->userdata('email');
			$data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
			$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
			$data['dataLelang'] = $this->db->get('lelang')->result_array();
			$data['detailLelang'] = $this->db->get_where('lelang', ['id' => $id])->row_array();
			$data['title'] = 'Menu Lelang';
			$this->load->view('frontEnd/templates/header', $data);
			$this->load->view('frontEnd/templates/topbar', $data);
			$this->load->view('frontEnd/lelang/detailLelang', $data);
			$this->load->view('frontEnd/templates/footer');
		}
	}

	public function tambahLelang()
	{
		if( $this->session->userdata('akses') != 1) {
			redirect('auth/blok');
		}
		
		$this->form_validation->set_rules('merk', 'Merk', 'required|trim');
		$this->form_validation->set_rules('model', 'Model', 'required|trim');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required|trim');
		$this->form_validation->set_rules('tipe', 'Tipe', 'required|trim');
		$this->form_validation->set_rules('tahun_dibuat', 'Tahun Dibuat', 'required|trim');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		$this->form_validation->set_rules('harga_lelang', 'Harga Lelang', 'required|trim|numeric');
		$this->form_validation->set_rules('harga_baru', 'Harga Baru', 'required|trim|numeric');
		$this->form_validation->set_rules('odometer', 'Odo Meter', 'required|trim|numeric');
		$this->form_validation->set_rules('pajak', 'Pajak', 'required|trim');
		$this->form_validation->set_rules('region', 'Region', 'required|trim');
		$this->form_validation->set_rules('plat_tipe', 'Plat Tipe', 'required|trim');
		$this->form_validation->set_rules('plat_region', 'Plat Region', 'required|trim');
		$this->form_validation->set_rules('warna', 'Warna', 'required|trim');
		$this->form_validation->set_rules('mesin', 'Mesin', 'required|trim');
		$this->form_validation->set_rules('katup', 'Katup', 'required|trim');
		$this->form_validation->set_rules('cilinder', 'Cylinder', 'required|trim');
		$this->form_validation->set_rules('kapasitas_cc', 'Kapasitas CC', 'required|trim|numeric');
		$this->form_validation->set_rules('tenaga', 'Tenaga', 'required|trim|numeric');
		$this->form_validation->set_rules('torsi', 'Torsi', 'required|trim|numeric');
		$this->form_validation->set_rules('transmisi', 'Transmisi', 'required|trim');
		$this->form_validation->set_rules('girboks', 'Girboks', 'required|trim');
		$this->form_validation->set_rules('jenis_penggerak', 'Jenis Penggerak', 'required|trim');
		$this->form_validation->set_rules('jenis_bbm', 'Jenis BBM', 'required|trim');
		$this->form_validation->set_rules('kapasitas_duduk', 'Kapasitas Duduk', 'required|trim');
		$this->form_validation->set_rules('kapasitas_tangki', 'Kapasitas Tangki', 'required|trim');
		$this->form_validation->set_rules('panjang', 'Panjang', 'required|trim|numeric');
		$this->form_validation->set_rules('lebar', 'Lebar', 'required|trim|numeric');
		$this->form_validation->set_rules('tinggi', 'Tinggi', 'required|trim|numeric');
		$this->form_validation->set_rules('ground', 'Ground', 'required|trim|numeric');
		
		if( $this->form_validation->run() == false) {
			$email = $this->session->userdata('email');
			$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
			$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
			$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
			$data['email'] = $email = $this->session->userdata('email');
			$data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
			$data['dataProvinsi'] = $this->db->get('provinsi')->result_array();
			$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
			$data['dataLelang'] = $this->db->get('lelang')->result_array();
			$data['title'] = 'Menu Lelang';
			$this->load->view('frontEnd/templates/header', $data);
			$this->load->view('frontEnd/templates/topbar', $data);
			$this->load->view('backEnd/admin/dataLelang/tambahLelang', $data);
			$this->load->view('frontEnd/templates/footer');
		} else {
			$data_mobil = [
				'model' => htmlspecialchars($this->input->post('model'), true),
				'gambar' => htmlspecialchars($this->input->post('gambar'), true),
				'merk' => htmlspecialchars($this->input->post('merk'), true),
				'tipe' => htmlspecialchars($this->input->post('tipe'), true),
				'kategori' => htmlspecialchars($this->input->post('kategori'), true),
				'harga_lelang' => htmlspecialchars($this->input->post('harga_lelang'), true),
				'harga_baru' => htmlspecialchars($this->input->post('harga_baru'), true),
				'odometer' => htmlspecialchars($this->input->post('odometer'), true),
				'pajak' => htmlspecialchars($this->input->post('pajak'), true),
				'warna' => htmlspecialchars($this->input->post('warna'), true),
				'region' => htmlspecialchars($this->input->post('region'), true),
				'plat_tipe' => htmlspecialchars($this->input->post('plat_tipe'), true),
				'plat_region' => htmlspecialchars($this->input->post('plat_region'), true),
				'jenis_mesin' => htmlspecialchars($this->input->post('mesin'), true),
				'katup' => htmlspecialchars($this->input->post('katup'), true),
				'cilinder' => htmlspecialchars($this->input->post('cilinder'), true),
				'kapasitas_cc' => htmlspecialchars($this->input->post('kapasitas_cc'), true),
				'kapasitas_duduk' => htmlspecialchars($this->input->post('kapasitas_duduk'), true),
				'panjang' => htmlspecialchars($this->input->post('panjang'), true),
				'lebar' => htmlspecialchars($this->input->post('lebar'), true),
				'tinggi' => htmlspecialchars($this->input->post('tinggi'), true),
				'ground' => htmlspecialchars($this->input->post('ground'), true),
				'kapasitas_tangki' => htmlspecialchars($this->input->post('kapasitas_tangki'), true),
				'tenaga' => htmlspecialchars($this->input->post('tenaga'), true),
				'torsi' => htmlspecialchars($this->input->post('torsi'), true),
				'transmisi' => htmlspecialchars($this->input->post('transmisi'), true),
				'jenis_penggerak' => htmlspecialchars($this->input->post('jenis_penggerak'), true),
				'jenis_bbm' => htmlspecialchars($this->input->post('jenis_bbm'), true),
				'girboks' => htmlspecialchars($this->input->post('girboks'), true),
				'tahun_dibuat' => htmlspecialchars($this->input->post('tahun_dibuat'), true),
			];

			$this->db->insert('lelang', $data_mobil);
			$this->session->set_flashdata('message-success', 'Data mobil berhasil ditambahkan!');
            redirect('lelang');
		}
	}

	public function ajuanTawaran($id)
	{
		$this->form_validation->set_rules('email2', 'Email Tambahan', 'required|trim|valid_email');
		$this->form_validation->set_rules('jumlah_ajuan', 'Jumlah Ajuan', 'required|trim');

		if( $this->form_validation->run() == false ) {
			$email = $this->session->userdata('email');
			$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
			$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
			$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
			$data['email'] = $email = $this->session->userdata('email');
			$data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
			$data['title'] = 'Ajuan Lelang';
			$data['dataPengguna'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
			$data['dataLelang'] = $this->db->get_where('lelang', ['id' => $id])->row_array();
			$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
			$this->load->view('frontEnd/templates/header', $data);
			$this->load->view('frontEnd/templates/topbar', $data);
			$this->load->view('frontEnd/lelang/ajuantawaran', $data);
			$this->load->view('frontEnd/templates/footer');
		} else {
			$email = $this->session->userdata('email');
			$dataPengguna = $this->db->get_where('pengguna', ['email' => $email])->row_array();
			$dataLelang = $this->db->get_where('lelang', ['id' => $id])->row_array();

			$data_lelang = [
				'id_lelang' => $this->getId(),
				'id_mobil' => $id,
				'id_pengguna' => $dataPengguna['id'],
				'email_pengguna' => $dataPengguna['email'],
				'nama_pengguna' => $dataPengguna['nama'],
				'telp' => $dataPengguna['telp'],
				'email2' => htmlspecialchars($this->input->post('email2', true)),
				'jumlah_lelang' => htmlspecialchars($this->input->post('jumlah_ajuan', true)),
				'model' => $dataLelang['model'],
				'gambar' => $dataLelang['gambar'],
				'merk' => $dataLelang['merk'],
				'tipe' => $dataLelang['tipe'],
				'kategori' => $dataLelang['kategori'],
				'harga_lelang' => $dataLelang['harga_lelang'],
				'harga_baru' => $dataLelang['harga_baru'],
				'odometer' => $dataLelang['odometer'],
				'pajak' => $dataLelang['pajak'],
				'warna' => $dataLelang['warna'],
				'region' => $dataLelang['region'],
				'plat_tipe' => $dataLelang['plat_tipe'],
				'plat_region' => $dataLelang['plat_region'],
				'jenis_mesin' => $dataLelang['jenis_mesin'],
				'katup' => $dataLelang['katup'],
				'cilinder' => $dataLelang['cilinder'],
				'kapasitas_cc' => $dataLelang['kapasitas_cc'],
				'kapasitas_duduk' =>$dataLelang['kapasitas_duduk'],
				'panjang' => $dataLelang['panjang'],
				'lebar' => $dataLelang['lebar'],
				'tinggi' =>$dataLelang['tinggi'],
				'ground' => $dataLelang['ground'],
				'kapasitas_tangki' => $dataLelang['kapasitas_tangki'],
				'tenaga' => $dataLelang['tenaga'],
				'torsi' => $dataLelang['torsi'],
				'transmisi' => $dataLelang['transmisi'],
				'jenis_penggerak' => $dataLelang['jenis_penggerak'],
				'jenis_bbm' =>$dataLelang['jenis_bbm'],
				'girboks' => $dataLelang['girboks'],
				'tahun_dibuat' => $dataLelang['tahun_dibuat'],
				'lelang_diajukan' => 1,
				'dilelang_pada' => date('H:i, l, d F Y')
			];

			$this->db->insert('daftar_lelang', $data_lelang);
			$this->session->set_flashdata('message-success', 'Anda berhasil mengajukan ajuan lelang!');
            redirect('lelang');
		}
	}

	public function getId()
	{
		return mt_rand(1000000000, 9999999999);
	}

	public function riwayatAjuan()
	{
		$email = $this->session->userdata('email');
		$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
		$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
		$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
		$data['email'] = $email = $this->session->userdata('email');
		$data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
		$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$data['dataAjuan'] = $this->db->get_where('daftar_lelang', ['email_pengguna' => $email])->result_array();
		$data['title'] = 'Riwayat Ajuan';
		$this->load->view('frontEnd/templates/header', $data);
		$this->load->view('frontEnd/templates/sidebar', $data);
		$this->load->view('frontEnd/templates/topbar', $data);
		$this->load->view('frontEnd/lelang/riwayatAjuan', $data);
		$this->load->view('frontEnd/templates/footer');
	}

	public function hapusAjuan($id) 
	{
		$this->db->where('id', $id);
		$this->db->delete('daftar_lelang');

		$this->session->set_flashdata('message-success', 'Anda berhasil menghapus ajuan lelang!');
        redirect('lelang/riwayatAjuan');
	}

	public function lihatLelang($id, $id_mobil)
	{
		$email = $this->session->userdata('email');
		$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
		$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
		$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
		$data['email'] = $email = $this->session->userdata('email');
		$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$data['dataAjuan'] = $this->db->get_where('daftar_lelang', ['email_pengguna' => $email, 'id' => $id])->row_array();
		$data['dataPengajuan'] = $this->Lelang_model->lihatAjuanDariHarga($id_mobil);
		$data['title'] = 'Riwayat Ajuan';
		$this->load->view('frontEnd/templates/header', $data);
		$this->load->view('frontEnd/templates/sidebar', $data);
		$this->load->view('frontEnd/templates/topbar', $data);
		$this->load->view('frontEnd/lelang/lihatDetail', $data);
		$this->load->view('frontEnd/templates/footer');
	}

	public function riwayatDimenangkan()
	{
		$email = $this->session->userdata('email');
		$data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
		$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
		$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
		$data['email'] = $email = $this->session->userdata('email');
		$data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
		$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$data['dataAjuan'] = $this->db->get_where('daftar_lelang', ['email_pengguna' => $email])->result_array();
		$data['title'] = 'Riwayat Ajuan';
		$this->load->view('frontEnd/templates/header', $data);
		$this->load->view('frontEnd/templates/sidebar', $data);
		$this->load->view('frontEnd/templates/topbar', $data);
		$this->load->view('frontEnd/lelang/riwayatDimenangkan', $data);
		$this->load->view('frontEnd/templates/footer');
	}

	
	public function akhiriSesi($id)
	{
		$data = [
			'sesi_lelang' => 1
		];

		$this->db->where('id', $id);
		$this->db->update('lelang', $data);

		$this->session->set_flashdata('message-success', 'Berhasil mengakhiri sesi lelang!');
		redirect('lelang');
	}

	public function kembalikanSesi($id)
	{
		$data = [
			'sesi_lelang' => 0
		];

		$this->db->where('id', $id);
		$this->db->update('lelang', $data);

		$this->session->set_flashdata('message-success', 'Berhasil mengembalikan sesi lelang!');
		redirect('lelang');
	}
}
