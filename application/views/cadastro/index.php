<div class="container">    
    <?php        
        // isset() verifica se uma váriavel é nulla ou não
        // utilizando operador ternário para verificar se existe erros ou não
        echo isset($messages) ? $messages : '';

        echo form_open('cadastro/novo', array("autocomplete" => "off"));

            echo form_input(array(
                "name" => "email",
                "type" => "email",
                "class" => "form-control",
                "placeholder" => "Insira um e-mail válido",                
                "autocomplete" => "off"
            ));

            echo form_input(array(
                "name"=> "nome",
                "type" => "text",
                "class" => "form-control",
                "placeholder" => "Nome Completo",
                "autocomplete" => "off"
            ));

            echo form_input(array(
                "name"=> "senha",
                "type" => "password",
                "class" => "form-control",
                "placeholder" => "******",
                "autocomplete" => "off"
            ));

            echo form_submit('submit','Cadastrar',array("class" => "btn btn-primary"));
            
        echo form_close();
    ?>
</div>