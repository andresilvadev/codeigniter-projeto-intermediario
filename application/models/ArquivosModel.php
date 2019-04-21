<?php

    class ArquivosModel extends CI_Model
    {
        public function inserir($dados)
        {
            $this->load->database();
            $this->db->insert('arquivos', $dados);
        }
    }
    