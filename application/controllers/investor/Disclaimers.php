<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disclaimers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Ikhtisar Keuangan | Nusa Konstruksi Enjiniring, Tbk';
        $this->load->view('investor/disclaimers', $data);
    }
}