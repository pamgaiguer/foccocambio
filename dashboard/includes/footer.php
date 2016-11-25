
<div class="preloader-wrapper active">
<div class="spinner-layer spinner-blue-only">
    <div class="circle-clipper left">
      <div class="circle"></div>
    </div>
    <div class="gap-patch">
      <div class="circle"></div>
    </div>
    <div class="circle-clipper right">
      <div class="circle"></div>
    </div>
  </div>
</div>


<script src="/dashboard/scripts/jquery-2.2.4.min.js"></script>
<script src="/dashboard/scripts/jquery.mask.min.js"></script>
<script src="/dashboard/scripts/materialize.min.js"></script>
<script src="/dashboard/scripts/jquery.elevatezoom.js"></script>
<script src="/dashboard/scripts/main.js"></script>
<script>
  $(document).ready(function(){
    $('select').material_select();

    focco.sideNav();
    focco.loginFormPost();
  });
</script>
</body>
</html>