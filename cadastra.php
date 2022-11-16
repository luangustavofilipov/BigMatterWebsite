<?php
require_once './Classes/usuarios.php';
$u = new Usuario;

?>
<html lang="pt-br">

<head>

    <!--Favicon-->
    <link rel="shortcut icon" href="./frontend/img/barbetta.png" type="image/x-icon" />
    <meta charset="utf-8" />
    <title>Cadastrar</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div id="corpo-form-cad">
        <h1 id="text-login">Cadastrar</h1>
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome completo" maxlength="30" />
            <input type="tel" name="telefone" placeholder="Telefone" maxlength="30" />
            <input type="text" name="email" placeholder="Email" maxlength="40" />
            <input type="password" name="senha" placeholder="Senha" maxlength="15" />
            <input type="password" name="confsenha" placeholder="Confirmar senha" maxlength="15" />
            <input type="submit" name="" value="Cadastrar" />
            <p id="text-link">
                Já é inscrito?
                <a id="link-login" href="./index.php"><strong>Faça o login</strong></a>
            </p>
        </form>
    </div>
    <?php
  if (isset($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confsenha = addslashes($_POST['confsenha']);
    //verificar se nao esta vazio
    if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confsenha)) {
      $u->conectar("barbetta", "localhost", "root", "");
      if ($u->$msgErro == "") {
        if ($senha == $confsenha) {
          if ($u->cadastrar($nome, $telefone, $email, $senha)) {
            echo "Cadastrado com sucesso!";
          } else {
            echo "Email já cadastrado!";
          }
        } else {
          echo "Senha não correspondem!";
        }
      } else {
      }
    } else {
      echo "Preencha todos os campos!";
    }
  }
  ?>

</body>

</html>