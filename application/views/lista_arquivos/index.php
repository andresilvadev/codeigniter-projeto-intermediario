

<?php foreach ($dados as $dado): ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>     
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $dado->id; ?></th>
      <td><?php echo $dado->nome; ?></td>
      <td>
        <a href="<?php echo base_url('public/upload/').$dado->arquivo; ?>" class="btn btn-success">Baixar</a>
        <a href="<?php echo base_url('public/upload/').$dado->zip; ?>" class="btn btn-primary">Baixar zip</a> 
      </td>
    </tr>    
  </tbody>
</table>


<?php endforeach; ?>