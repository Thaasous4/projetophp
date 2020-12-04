<?php
//Sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>
<script> // onload serve para carregar a função depois que toda pagina for carregada 
  window.onload = function(){
      M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
  };
</script>

  <?php
  endif;
session_unset();
?>