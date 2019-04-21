<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller
{
    public function index()
    {
        $this->load->view('partials/header');        
        $this->load->view('upload/index');
        $this->load->view('partials/footer');
    }

    public function subir()
    {
        
    }


}
