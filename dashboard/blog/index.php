<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main class="calculadora">
  <div class="row">
    <div class="col s12">
      <h4>Blog do João</h4>
      <blockquote>
        Área para visualizar posts do blog do economista João
      </blockquote>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <table class="striped">
        <thead>
          <tr>
            <th>Título <i class="material-icons">keyboard_arrow_up</i></th>
            <th>Autor</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a class="modal-trigger" href="#modal1">Lorem ipsum dolor sit amet, consectetur </a></td>
            <td>João</td>
            <td>23/01/2017</td>
          </tr>
          <tr>
            <td><a class="modal-trigger" href="#modal2">Lorem ipsum dolor sit amet, consectetur </a></td>
            <td>João</td>
            <td>23/01/2017</td>
          </tr>
          <tr>
            <td><a class="modal-trigger" href="#modal3">Lorem ipsum dolor sit amet, consectetur </a></td>
            <td>João</td>
            <td>23/01/2017</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Titulo do posto do blog</h4>
      <p>texto do blog</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close btn-flat">Agree</a>
    </div>
  </div>


  <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Titulo do posto do blog</h4>
      <p>texto do blog</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close btn-flat">Agree</a>
    </div>
  </div>


  <!-- Modal Structure -->
  <div id="modal3" class="modal">
    <div class="modal-content">
      <h4>Titulo do posto do blog</h4>
      <p>texto do blog</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close btn-flat">Agree</a>
    </div>
  </div>



  <div class="row">
    <div class="col s12">
      <a class="btn bg-blue right">Redigir post</a>
    </div>
  </div>

</main>

<?php
include '../includes/footer.php';
?>

<script>
  $(document).ready(function(){


    $(".modal-trigger").click(function(e){
      e.preventDefault();
      $('#modal1').openModal();
    });

    $(".modal-trigger").click(function(e){
      e.preventDefault();
      $('#modal2').openModal();
    });

    $(".modal-trigger").click(function(e){
      e.preventDefault();
      $('#modal3').openModal();
    });

  });
</script>