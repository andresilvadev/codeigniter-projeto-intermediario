<div class="container">
    <?php
        echo form_open('');

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