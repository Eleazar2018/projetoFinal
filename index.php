<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Projeto</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>
    <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="POST" action="">
            <input type="email" name="email" placeholder="Usuário">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="ACESSAR">
            <a href="cadastrar.php">Ainda não é inscrito ? <strong>Cadastre-se!</strong></a>
        </form>
    </div>

    <?php
    if (isset($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        //verificar se não está vazio
        if (!empty($email) && !empty($senha)) {
            $u->conectar("projeto_login", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($u->logar($email, $senha)) {
                    header("location: areaPrivada.php");
                } else {
                    echo "Email e/ou senha incorretos!";
                }
            } else {
                echo "Erro: " . $u->msgErro;
            }
        } else {
            echo "Preencha todos os campos!";
        }
    }
    ?>
</body>

</html>