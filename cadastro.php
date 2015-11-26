<?php
  require_once "config.php";
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>LF English</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      
        <a href="index.html" id="logo"><img src="logo1.png" width="180" height="43" alt="logo"/></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Inicio</a></li>
          <li><a href="cadastro.php">Cadastro</a></li>
          <li><a href="#">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>


<div class="container">
    <div class="section">
        <div class="row">
                <form class="col s12" role="form" method="post" action="?go=Cadastrar">
                <div class="row">
                    <div class="input-field col s4">
                    <input placeholder="Nome" name="nome" id="nome" type="text" class="validate">
                    <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s4">
                    <input placeholder="Usuário" name="usuario" id="usuario" type="text" class="validate">
                    <label for="usuario">Usuário</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                    <input placeholder="Celular" name="nome" id="celular" type="text" class="validate">
                    <label for="celular">Celular</label>
                    </div>
                    <div class="input-field col s4">
                    <input placeholder="Telefone" name="telefone" id="telefone" type="text" class="validate">
                    <label for="telefone">Telefone</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                    <input placeholder="Email" name="email" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                    <input placeholder="Endereço" name="endereco" id="endereco" type="text" class="validate">
                    <label for="endereco">Endereço</label>
                    </div>
                    <div class="input-field col s3">
                    <input placeholder="Cidade" name="cidade" id="cidade" type="text" class="validate">
                    <label for="cidade">Cidade</label>
                    </div>   
                    <div class="input-field col s3">
                    <input placeholder="Bairro" name="bairro" id="bairro" type="text" class="validate">
                    <label for="bairro">Bairro</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                    <input placeholder="Senha" name="senha" id="senha" type="password" class="validate">
                    <label for="senha">Password</label>
                    </div>
                </div>
                <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                        <p class="center-align">
                            <form><button class="btn waves-effect waves-light" type="submit" name="Cadastrar">Cadastrar
                                                        <i class="material-icons right">send</i>
                            </button>
                            </form>
                        </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  


 

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Sobre nós</h5>
          <p class="grey-text text-lighten-4">A LF ENGLISH foi fundada pelos alunos Leicivane e Felipe do curso de Sistemas de Informação da faculdade Projeção.</p>
            </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Edited by <a class="brown-text text-lighten-3" href="http://materializecss.com">Felipe Medeiros</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

<?php
  if(@$_GET['go'] == 'Cadastrar'){
    
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $celular = $_POST['celular'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $password = $_POST['senha'];

    if (empty($nome)) {
      echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
    }
    elseif(empty($usuario)) {
      echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
    }
    elseif(empty($celular)) {
      echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
    }
    elseif(empty($telefone)) {
      echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
    }
    elseif(empty($email)) {
      echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
    }
    elseif(empty($endereco)) {
      echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
    }
    elseif(empty($cidade)) {
      echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
    }
    elseif(empty($bairro)) {
      echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
    }
    elseif(empty($password)) {
      echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
    }else{
      $query1 = mysql_num_rows(mysql_query("SELECT * FROM USUARIO WHERE USUARIO = '$usuario'"));
      if ($query1 == 1) {
        echo "<script>alert('Usuário já existe!'); history.back();</script>";
       }else{
        mysql_query("insert into usuario (nome, usuario, celular, telefone, email, endereco, cidade, bairro, senha) values ('$nome','$usuario','$celular','$telefone','$email','$endereco','$cidade','$bairro','$password')");
          echo "<script>alert('Usuário cadastrado com sucesso!'); history.back();</script>";
          echo "<meta http-equiv='refresh' content='0, url=cadastro.php'>";
      }
    }
  }

?>

