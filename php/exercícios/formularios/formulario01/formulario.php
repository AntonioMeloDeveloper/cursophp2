<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Olá ! Segue formulário</h1>
        <form action="" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="01"><br>
            <label for="idade">Idade:</label>
            <input type="text" name="idade" id="02"><br>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="02"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
            echo " O nome é : " . $_POST['nome'] . "<br>";
            echo " O idade é : " . $_POST['idade'] . "<br>";
            echo " O e-mail é : " . $_POST['email'] . "<br>";
        ?>
    </main>
</body>
</html>