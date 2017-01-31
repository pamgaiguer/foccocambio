<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main class="calculadora">
  <div class="row">
    <div class="col s12">
      <h4>Blog do João</h4>
      <blockquote>
        Área para criar posts do blog do economista João
      </blockquote>
    </div>
  </div>

  <div class="row">
    <form>
      <div class="input-field col s4">
        <input placeholder="A crise economica no Brasil" type="text">
        <label>Titulo do post</label>
      </div>

      <div class="input-field col s4">
        <input placeholder="A crise economica no Brasil" type="text">
        <label>Titulo do post</label>
      </div>

      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>

      <div class="input-field col s8">
        <textarea id="postContent" name="content"></textarea>
      </div>
    </form>
  </div>

  <div class="row">
    <div class="col s12">
      <a class="btn bg-blue right">Postar no blog</a>
    </div>
  </div>
</main>

<?php
include '../includes/footer.php';
?>

<script>
  $(function() {
    $('#postContent').froalaEditor({
      language:'pt_br',
      saveInterval: 2500,
      fontFamily: {
        'Avenir-Regular,sans-serif': 'Font 1',
        'Roboto,sans-serif': 'Font 2',
      },
      imageAllowedTypes: ['jpeg', 'jpg', 'png']
    })
  });
</script>