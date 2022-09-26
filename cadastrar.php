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
    <div id="corpo-form-cad">
        <h1>Cadastrar</h1>
        <form action=" " method="POST">
            <input type="text" name="nome" placeholder="Nome completo" maxlength="30">
            <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
            <input type="email" name="email" placeholder="Usuário" maxlength="40">
            <input type="password" name="senha" placeholder="Senha" maxlength="12">
            <input type="password" name="confSenha" placeholder="Confirmar senha" maxlength="12">
            <input type="submit" value="CADASTRAR">
        </form>
    </div>

    <?php
    //verificar se o usuario clicou no botao cadastrar
    if (isset($_POST['nome'])) 
    {
        $nome = addslashes($_POST['nome']); //addslashes para evitar comando de hackers
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['confSenha']);

        //verificar se não está vazio
        if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) 
        {
            $u->conectar("projeto_login", "localhost", "root", "");
            if ($u->msgErro == "") //ok
            {
                if ($senha == $confirmarSenha) 
                {
                    if ($u->cadastrar($nome, $telefone, $email, $senha)) 
                    {
                        echo "Cadastrado com sucesso acesse para entrar!";
                    } else {
                        echo "Email já cadastrado";
                    }
                } else 
                {
                    echo "Opss ! A senha e o confirmar senha não são idênticos";
                }
            } else 
            {
                echo "Erro: " . $u->$msgErro; //exibir a mensagem de erro que está armazenada na variavel $msgErro
            }
        } else 
        {
            echo "Preecha todos os campos do formulário";
        }
    }

    ?>
</body>

</html>