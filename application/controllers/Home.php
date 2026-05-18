<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Home | Nusa Konstruksi Enjiniring, Tbk';
        $this->load->view('index', $data);
    }

    public function profile()
    {
        $data['title'] = 'Profile Perusahaan | Nusa Konstruksi Enjiniring, Tbk';
        $this->load->view('versi1/profile-perusahaan', $data); // Untuk template versi 1
        
    }

    public function laporan_tahunan()
    {
        $data['title'] = 'Laporan Tahunan | Nusa Konstruksi Enjiniring, Tbk';
        $this->load->view('investor/laporan-tahunan', $data);
        
    }
}