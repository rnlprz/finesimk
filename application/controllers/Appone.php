<?php

class Appone extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
    }
    public function about()
    {

        $this->load->view('templates/header');
        $this->load->view('pages/about');
        $this->load->view('templates/footer');
    }
    public function portal()
    {

        $this->load->view('templates/header');
        $this->load->view('pages/portal');
        $this->load->view('templates/footer');
    }
}
