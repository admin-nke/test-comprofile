<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahunan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Laporan Tahunan | Nusa Konstruksi Enjiniring, Tbk';
        $this->load->view('investor/laporan-tahunan', $data);
    }
}