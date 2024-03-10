<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>
    <div>
        <?php 
        function elevação ($numero, $potencia){

            $resultado = $numero;
            for($k = 1; $k <  $potencia; $k++){
                $resultado = $resultado * $numero;
            }
        }
        ?>
    </div>z
</body>
</html>