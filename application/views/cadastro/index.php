<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">
        <title>Area 51</title>
    </head>
    <body>
        <header>
            <h1 class="text-center">Area de testes</h1> 
        </header>
        <hr>

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
    </body>
</html>