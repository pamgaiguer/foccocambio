<?php

include "../includes/header.php";
include "../core/database.php";
?>
<main class="mural">
  <div class="row">
    <div class="col s12">
      <h4>Mural</h4>
      <blockquote>
        Área para criar posts do mural
      </blockquote>
    </div>
  </div>


  <form id="form-mural-adicionar">
    <input type="hidden" id="usuarioId" value=<?php echo $_SESSION['currentUser']['id'] ?> />

    <div class="row">
      <div class="input-field col s4">
        <input id="titulo" placeholder="A crise economica no Brasil" type="text">
        <label>Titulo do post</label>
      </div>

      <div class="input-field col s4">
        <input id="subtitulo" placeholder="A crise economica no Brasil" type="text">
        <label>Subtitulo do post</label>
      </div>

      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>

      <div class="input-field col s8">
       <textarea id="postContent" name="content"></textarea>
     </div>
   </div>

   <div class="row">
    <div class="col s12">
      <input class="btn bg-blue right" type="submit" value="Postar"></a>
    </div>
  </div>

</form>


<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Adicionar postagem</h4>
    <p>Deseja adicionar esse conteúdo ao mural?</p>
  </div>
  <div class="modal-footer">
    <a id="modal-confirm" class="modal-action modal-close btn">
      <i class="material-icons right">&#xE86C;</i>
      Confirmar
    </a>

    <a id="modal-cancel" class="modal-action modal-close btn red darken-1 white">
      <i class="material-icons right">&#xE5C9;</i>
      Cancelar
    </a>
  </div>
</div>


</main>

<?php
include '../includes/footer.php';
?>

<script>
  focco.muralAdicionar();
</script>