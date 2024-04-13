
<?php 

$erro = false;

if (count($_POST)> 0){
    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $telefone =$_POST['telefone'];
    $nascimento =$_POST['nascimento'];
}

// if (se) empty (estiver vazio) preencha o nome 

if(empty($nome)) {
    $erro = "Preencha o Nome";
}

if(empty($email)) {
    $erro = "Preencha o E-mail";
}

if ($erro){
    echo "<p><b>ERRO: $erro</b></p>";
} else {
    if (!empty($nascimento)) {
        $pedacos = implode('-',array_reverse(explode('/', $nascimento )));
        $nascimento = $pedacos;
    }

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <a href="/clientes.php">Voltar para a lista</a>
    

            <form method="POST" action="">
                <label for="text">Nome:</label>
                <input type="text" name="nome" id="">

                <label for="text">E-mail:</label>
                <input type="text" name="email" id="">

                <label for="text">Telefone:</label><p>Exemplo:81995955716 sem espaço ou símbolos</p>
                <input type="text" name="telefone" id="">

                <label for="text">Data de Nascimento:</label>
                <input type="text" name="nascimento" id="">

                <input type="submit" value="Salvar Cliente">
            </form>

        
    </section>
</body>
</html>