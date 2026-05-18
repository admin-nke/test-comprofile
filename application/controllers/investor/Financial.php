<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financial extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Ikhtisar Keuangan | Nusa Konstruksi Enjiniring, Tbk';
        $this->load->view('investor/financial', $data);
    }
}