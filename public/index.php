<?php require '../database/conexao.php' ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Painel de Status</title>

  <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap-3.3.7.min.css">
  <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../libs/normalize/css/normalize-7.0.0.css">
  <!--meu css-->
  <link rel="stylesheet" href="../libs/publicss/public.css">
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Status dos Colaboradores</h1> 
    </div>
    <div class="col-md-12">
      <?php require '../functions/lista.php' ?>
    </div>
  </div>
</div>


<script src="../libs/jquery/js/jquery-3.2.1.min.js"></script>
<script src="../libs/bootstrap/js/bootstrap-3.3.7.min.js"></script>
<script src="../libs/bootstrap/js/npm.js"></script>

</body>
</html>
