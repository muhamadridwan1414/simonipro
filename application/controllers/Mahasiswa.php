<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	// construct method
    public function __construct() {
        parent::__construct();

        // set local timezone
        date_default_timezone_set('Asia/jakarta');

        // Pengecekan apakah user sudah login
        if (!$this->session->userdata('is_logged_in')) {
            // Set pesan flashdata untuk ditampilkan di halaman login
            $this->session->set_flashdata('error', 'Silahkan login terlebih dahulu');
            // Redirect ke halaman login
            redirect('auth');
        }

        // Pengecekan apakah user memiliki role 'koordinator'
        if ($this->session->userdata('nama_role') != 'mahasiswa') {
            // Redirect ke halaman lain jika bukan koordinator
            redirect('auth');
        }

    }

	public function index()
	{
		$data['title'] = 'Dashboard | Mahasiswa';
        $data['active'] = 'dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('mahasiswa/v_dashboard');
        $this->load->view('templates/footer');
	}

}