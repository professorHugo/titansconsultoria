<?php
  require 'config/configuracoes.php';
  session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Titans Consultoria Empresarial <?= $_SESSION['Version'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background: #162127; color: #FFF">
    
    <?php include 'components/Menu.php'; ?>

    <img src="img/banner01.png" alt="Banner 1" class="img-fluid">

    <p class="lead text-white">
      Voc&ecirc; gostaria de ter uma empresa ou neg&oacute;cio com 2 vezes mais lucros e vendas do que tem hoje e uma equipe de vendas que bate metas todos os dias?
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>