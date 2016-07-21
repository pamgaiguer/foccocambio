<?php

include "../core/database.php";
include "../includes/header.php";
?>
<main>
  <div class="section"></div>
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#div-pf">Pessoa física</a></li>
        <li class="tab col s3"><a href="#div-pj">Pessoa jurídica</a></li>
      </ul>
    </div>

  <?php include "../includes/cadastro_pf.php"; ?>
  <?php include "../includes/cadastro_pj.php"; ?>



  </div>
</main>

<?php
include "../includes/footer.php";
?>

<script>
  focco.adicionarClienteFormPost();
</script>