<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Docker Cursos - DIO</title>  
</head>
<body>
  <?php
    $result = file_get_contents("http://node-cursos-container:9001/cursos");
    $cursos = json_decode($result);
  ?>
  
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>Curso</th>
          <th>Preço</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($cursos as $curso): ?>
          <tr>
            <td><?php echo $curso->nome; ?></td>
            <td><?php echo $curso->preco; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>