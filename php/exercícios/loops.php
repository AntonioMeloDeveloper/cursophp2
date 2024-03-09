<?php 

$i=0;
$tam=5;

for($i=0; $i < $tam; $i++ ){
    echo "Valor de i: $i <br/>";
}

// 01 variável de controle, 02 condição de parada do for, agora é incrementar a variável $i de um e um

$notas_dos_alunos = array('7.4', '1.7', '8.5', '3.5', '4.4', '8.7', '6.4', '8.4', '1.2', '4.3', '9.8', '0.5', '8.2',
'4.7', '1.1', '3.3', '3.4', '4.8', '8.7', '5.4', '2.2', '3.7', '5.9', '7.4', '4.8', '4.7', '1.5', '8.4', '2.1', '2.7 ');

foreach($notas_dos_alunos as $nota){
    if($nota >=6){
    echo "Aprovado <br>";
}else {
    echo "Reprovado <br>";
}

}

?>