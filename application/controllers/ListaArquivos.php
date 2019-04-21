<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ListaArquivos extends CI_Controller {

    public function index()
    {    
        $this->load->model('ArquivosModel');
        $view = array('dados' => $this->ArquivosModel->listar());
      
        $this->load->view('partials/header');
        $this->load->view('lista_arquivos/index', $view);        
        $this->load->view('partials/footer');
    }
   
}