<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Aqui temos este texto </h1>
        <div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non officia et consectetur! Autem provident nisi porro pariatur repudiandae quidem blanditiis similique, corporis, culpa dolores quaerat! Itaque eos corporis quis architecto.</p>
        </div>
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