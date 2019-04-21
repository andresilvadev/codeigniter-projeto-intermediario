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
        $nome = $this->input->post('nome');
        $arquivo = $_FILES['arquivo'];

        $nome_limpo = trim($nome);

        $config = array(
            "upload_path" => "public/upload",
            "allowed_types" => "pdf",
            "file_name" => rand(1,987695) . '_' . $nome_limpo . '.pdf',
            "max_size" => "300000"
        );

        $this->load->library('upload');
        $this->upload->initialize($config); // initialize prepara o processo de upload

        if ($this->upload->do_upload('arquivo') === true) {  // do_upload recebe a variavel arquivo entre plicas, retornando true ou false

            $this->load->library('zip');  // Carrega a biblioteca zip
            $this->zip->add_data('public/upload/' .$config['file_name']); // Pega o arquivo do diretório e zipa como temporario
            $this->zip->archive('public/upload/' . $config['file_name'] . '.zip'); // Pega o arquivo temporario e salva ele com zip

            $dados = array(
                "nome" => $nome,
                "arquivo" => $config['file_name'],
                "zip" => $config['file_name'] . '.zip'
            );

            $this->load->model('ArquivosModel');
            $this->ArquivosModel->inserir($dados);

            echo "Arquivo upado";
        } else {
            echo $this->upload->display_errors();
        }
    }


}
