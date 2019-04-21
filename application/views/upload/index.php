<div class="container">

    <form action="upload/subir" method="POST" enctype="multipart/form-data">    
        <div class="form-group">
            <label for="nameInput">Email address</label>
            <input type="text" name="nome" placeholder="Nome do arquivo" class="form-control"  id="nameInput" >        
        </div>

        <div class="form-group">
            <label for="inputForm">Upload de arquivo</label>
            <input type="file" class="form-control-file" id="inputForm" name="arquivo">
        </div>

        <button type="submit" class="btn btn-success">Enviar arquivo</button>
    </form>

</div>