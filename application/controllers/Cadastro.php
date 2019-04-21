<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller
{
    public function index()
    {
        $this->load->view('partials/header');
        $this->load->helper('form');
        $this->load->view('cadastro/index');
        $this->load->view('partials/footer');
    }

    public function novo()
    {
        $this->load->library('form_validation');

        // set_rules pede 3 parametros
        // param 1 = "parametro relacional ao campo"
        // param 2 = "nome de exibição"
        // param 3 = "regra de validação"
        // para passar mais de uma regra utiliza a "|"
        $this->form_validation->set_rules('email','E-mail','required|min_length[4]|max_length[100]|is_unique[usuarios]');
        $this->form_validation->set_rules('nome','Nome','required|min_length[4]|max_length[80]');
        $this->form_validation->set_rules('senha','Senha','required|min_length[6]|max_length[10]');

        // Metodo run vai passar uma a uma validação para ver se está todo validado o form
        if ($this->form_validation->run() === false) {
            $erros = array('messages' => validation_errors());
            
            $this->load->view('partials/header');
            $this->load->helper('form');
            $this->load->view('cadastro/index', $erros);
            $this->load->view('partials/footer');

        } else {

        }
    }

}
