<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Noticias</title>
</head>
<body>

<?php 
    require('conexao.php');
?>

<div class="container">
    <table class="table table-striped position-relative table-hover">
        <thead class="table-secondary">
            <th scope="col">#</th>
            <th scope="col">data</th>
            <th scope="col">titulo</th>
            <th scope="col">Texto</th>
        </thead>
        <tbody>
            <?php foreach($dados as $item):?>
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['data']; ?></td>
                    <td><?php echo $item['titulo']; ?></td>
                    <td><?php echo $item['texto']; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>
</html>