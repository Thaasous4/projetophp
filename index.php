<?php
//Conexão
require_once 'db_connect.php';

//Sessão
session_start();

//Botão enviar
if(isset($_POST['btn-entrar'])):
  $erros = array();
  $login = mysqli_escape_string($connect, $_POST['login']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);

if(empty($login) or empty($senha)):
  $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
  else:
    $sql = "SELECT login FROM usuario WHERE login = '$login'";
    $resultado = mysqli_query($connect, $sql);

    if(mysqli_num_rows($resultado) > 0):
      $senha = md5($senha);
      $sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha' ";
      $resultado = mysqli_query($connect, $sql);

          if(mysqli_num_rows($resultado) ==1 ):
          $dados = mysqli_fetch_array($resultado);
          mysqli_close($connect);
          $_SESSION['logado'] = true;
          $_SESSION['id_usuario'] = $dados['id'];
            header('Location: indexcadastro.php');
          else: 
            $erros[] = "<li> Usuário e senha não conferem </li>";
          endif;

    else:
        $erros[] = "<li> Usuário inexistente </li>";
      
    endif;
    
endif;
?>

<html>
<head>
   <title>Login</title>
  <meta charset="utf-8">
</head>
<body>
  <h1> LOGIN </h1>

<?php
if(!empty($erros))
  foreach($erros as $erro)
    echo $erro;
endif;
?>

<h1 style="color:MediumSeaGreen;"> LOGIN </h1>
<h3 style="font-family:courier;"> Faça seu login para continuar: </h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  Login: <input type="text" name="login" placeholder="Login" required autofocus><br>
  <br>
  Senha: <input type="password" name="senha" placeholder="Senha" required><br>
  <br>
  <button type="submit" name="btn-entrar"> Entrar </button>
 </form>
</body>
</html>


