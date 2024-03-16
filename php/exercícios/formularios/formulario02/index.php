<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <h1>Formulário 02</h1>
        <form action="" method="post">
             <label for="nome">Nome</label>
             <input required type="text" name="nome" id="01">

             <label for="email">E-mail</label>
             <input required type="email" name="email" id="02">

             <label for="website">Website</label>
             <input required type="url" name="website" id="03">

             <label for="comentario">Comentário</label>
             <textarea required name="comentario" id="04" cols="30" rows="3"></textarea>

             <label for="genero">Gênero:</label>
             <input type="radio" name="genero" value="masculino">Masculino
             <input type="radio" name="genero" value="feminino">Feminino
             <input type="radio" name="genero" value="outro">Outro

             <button name="enviado" type="submit">Enviar</button>
        </form>
        <div>
            <?php 
                if(isset($_POST['enviado'])){

                    $genero = "Não selecionado";

                    if(isset($_POST['genero'])){
                        $genero = $_POST['genero'];
                    }

                    echo "<p>Nome:" . $_POST['nome'] . "</p>";
                    echo "<p>E-mail:" . $_POST['email'] . "</p>";
                    echo "<p>Website:" . $_POST['website'] . "</p>";
                    echo "<p>Comentario:" . $_POST['comentario'] . "</p>";
                    echo "<p>Genero:" . $genero . "</p>";
                    
                }
            ?>
        </div>
    </main>     
</body>
</html>