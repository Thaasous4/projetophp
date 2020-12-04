<?php
//Conexão
include_once 'db_connectcadastro.php';
///Header
include_once 'header.php';
//Message
include_once 'message.php';

?>



<div class = "row">
  <div class = "col s12 m6 push-m3">
    <h3 class = "light"> Produtos </h3>
    <table class = "striped">
      <thead>
        <tr>
            <th>Produto:</th>
            <th>Preço:</th>
            <th>Tamanho:</th>
            <th>Cor:</th>
            <th>Quantidade:</th>
        </tr>
      </thead>

      <tbody>
        <?php
          $sql = "SELECT * FROM cadastroprodutos";
          $resultado = mysqli_query($connect, $sql);
          
          while($dados = mysqli_fetch_array($resultado)):
          ?>
         <tr> 
         <td><?php echo $dados['Produto']; ?></td>
         <td><?php echo $dados['Preço']; ?></td>
         <td><?php echo $dados['Tamanho']; ?></td>
         <td><?php echo $dados['Cor']; ?></td>
         <td><?php echo $dados['Quantidade']; ?></td>
         <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class = "btn-floating blue"><i class = "material-icons">edit</i></a></td>

        <td><a href="#modal<?php echo $dados['id']; ?>" class = "btn-floating red modal-trigger"><i class = "material-icons">delete</i></a></td>

        <!-- Modal Structure -->
  <div id="modal<?php echo $dados['id']; ?>" class="modal">
    <div class="modal-content">
      <h4>Opa!</h4>
      <p>Tem certeza que deseja excluir esse produto?</p>
    </div>
    <div class="modal-footer">

      <form action="delete.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <button type="submit" name="btn-deletar" class="btn red">Sim! Tenho certeza</button>

        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>


      </form>

    </div>
  </div>

        </tr>
        <?php 
        endwhile; 
        ?>
      
      </tbody>
    </table>
    <br>
    <a href="adicionar.php" class = "btn">Adicionar produto</a>
</div>


<?php
//Footer
include_once 'footer.php';
?>