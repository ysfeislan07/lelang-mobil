<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Lelang_model');

        if( !$this->session->userdata('email') && !$this->session->userdata('akses')) {
			$this->session->set_flashdata('message-danger', 'Login terlebih dahulu untuk mengakses sesi anda!');
			redirect('auth/login');
		}
    }

    public function index()
	{
		$email = $this->session->userdata('email');
		$data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$data['dataProvinsi'] = $this->db->get('provinsi')->result_array();
        $data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
        $data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
		$data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
		$data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
		$data['email'] = $email = $this->session->userdata('email');
		$data['title'] = 'Profil Pengguna';
		$this->load->view('frontEnd/templates/header', $data);
		$this->load->view('frontEnd/templates/sidebar', $data);
		$this->load->view('frontEnd/templates/topbar', $data);
		$this->load->view('frontEnd/user/biodata', $data);
		$this->load->view('frontEnd/templates/footer');
	}

    public function updateProfil($id)
	{
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required|trim');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required|trim');

        if( $this->form_validation->run() == false) {
            $email = $this->session->userdata('email');
            $data['dataLogin'] = $this->db->get_where('pengguna', ['email' => $email])->row_array();
            $data['dataProvinsi'] = $this->db->get('provinsi')->result_array();
            $data['jumlahLelangDiajukan'] = $this->Lelang_model->jumlahDiajukan($email);
            $data['dataLelangDiajukan'] = $this->db->get('daftar_lelang')->result_array();
            $data['jumlahDimenangkan'] = $this->Lelang_model->jumlahDimenangkan($email);
            $data['jumlahNotifikasi'] = $data['jumlahDimenangkan'] + $data['jumlahLelangDiajukan'];
            $data['email'] = $email = $this->session->userdata('email');
            $this->load->view('frontEnd/templates/header', $data);
            $this->load->view('frontEnd/templates/sidebar', $data);
            $this->load->view('frontEnd/templates/topbar', $data);
            $this->load->view('frontEnd/user/biodata', $data);
            $this->load->view('frontEnd/templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'telp' => htmlspecialchars($this->input->post('telp')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'kecamatan' => htmlspecialchars($this->input->post('kecamatan')),
                'kabupaten' => htmlspecialchars($this->input->post('kabupaten')),
                'provinsi' => htmlspecialchars($this->input->post('provinsi')),
                
            ];

            $this->db->where('id', $id);
            $this->db->update('pengguna', $data);

            $this->session->set_flashdata('message-success', 'Profil berhasil diperbarui!');
            redirect('user');
        }
	}

}

