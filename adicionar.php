<?php
///Header
include_once 'header.php';
?>

<div class = "row">
  <div class = "col s12 m6 push-m3">
    <h3 class = "light"> Novo Produto </h3>
    <form action="create.php" method="POST">
      <div class = "input-field col s12">
        <input type="text" name="Produto" id= "Produto">
        <label for="Produto">Produto</label>
      </div>

      <div class = "input-field col s12">
        <input type="text" name="Preço" id= "Preço">
        <label for="Preço">Preço</label>
      </div>

      <div class = "input-field col s12">
        <input type="text" name="Tamanho" id= "Tamanho">
        <label for="Tamanho">Tamanho</label>
      </div>

      <div class = "input-field col s12">
        <input type="text" name="Cor" id= "Cor">
        <label for="Cor">Cor</label>
      </div>

      <div class = "input-field col s12">
        <input type="text" name="Quantidade" id= "Quantidade">
        <label for="Quantidade">Quantidade</label>
      </div>

      <button type = "submit" name = "btn-cadastrar" class = "btn"> Cadastrar</button>
      <a href = "indexcadastro.php" class = "btn green"> Lista de produtos </a>

    </form>
  </div>
</div>


<?php
//Footer
include_once 'footer.php';
?>