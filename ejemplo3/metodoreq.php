<?php
require_once 'models/paises_model.php';
  $titulo = 'Inicio';
$paises = get_paises();

  require_once 'views/header.php';
  require_once 'views/paises_view.php';
  require_once 'views/footer.php';
 ?>
