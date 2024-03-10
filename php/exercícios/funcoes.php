<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes</title>
</head>
<body>
    <main>
        <?php 

            function gerarNumeros ($inicio, $fim){
               $lista =[];
               if ($fim <= $inicio){
                echo "Não dá para continuar";
               } else {
                    for ($k = $inicio; $k <= $fim; $k++){
                        $lista []= $k;
                    }
                    
               }
            return $lista;   
            }
// Chamamos a função aqui e acrescentamos os parametros para as funções
        $variavel = gerarNumeros(1, 5);
            var_dump($variavel);
        ?>
    </main>
</body>
</html>