<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Profile Perusahaan | Nusa Konstruksi Enjiniring, Tbk';
        $this->load->view('about/profile-perusahaan', $data);
    }
}