<?php  $estudantes = $_REQUEST ['estudantes']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row text-center">
    <h2>Semana da Acessibilidade</h2>
  </div>
  
<div class="text-center">
  <img  class="rounded"  src="https://cta.ifrs.edu.br/wp-content/uploads/sites/3/2018/12/18_BoasPrativasDescricaoImagens.jpg" alt="Minha com descrição de boas praticas de acessibilidade">
  </div>  
<br>  
<br>
  
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($estudantes as $estudantesAtual) { ?>
        <tr>
            <td><?php echo $estudantesAtual['id']; ?></td>
            <td><?php echo $estudantesAtual['nome']; ?></td>
            <td><?php echo $estudantesAtual['idade']; ?></td>
        </tr>
        <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>