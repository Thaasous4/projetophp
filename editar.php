<?php
//Conexãp
include_once 'db_connectcadastro.php';
///Header
include_once 'header.php';
//Select
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM cadastroprodutos WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class = "row">
  <div class = "col s12 m6 push-m3">
    <h3 class = "light"> Editar produto </h3>
    <form action="update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
      <div class = "input-field col s12">
        <input type="text" name="Produto" id= "Produto" value="<?php echo $dados['Produto']; ?>">
        <label for="Produto">Produto</label>
      </div>

      <div class = "input-field col s12">
        <input type="text" name="Preço" id= "Preço" value="<?php echo $dados['Preço']; ?>">
        <label for="Preço">Preço</label>
      </div>

      <div class = "input-field col s12">
        <input type="text" name="Tamanho" id= "Tamanho" value="<?php echo $dados['Tamanho']; ?>">
        <label for="Tamanho">Tamanho</label>
      </div>

      <div class = "input-field col s12">
        <input type="text" name="Cor" id= "Cor" value="<?php echo $dados['Cor']; ?>">
        <label for="Cor">Cor</label>
      </div>

      <div class = "input-field col s12">
        <input type="text" name="Quantidade" id= "Quantidade" value="<?php echo $dados['Quantidade']; ?>">
        <label for="Quantidade">Quantidade</label>
      </div>

      <button type = "submit" name = "btn-editar" class = "btn"> Atualizar</button>
      <a href = "index.php" class = "btn green"> Lista de produtos </a>

    </form>
  </div>
</div>


<?php
//Footer
include_once 'footer.php';
?>