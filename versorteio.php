<?php
// Mostrando o resultado do sorteio


if(!file_exists("sorteio/sorteio.csv")){
    header("location:sorteio.php");
}
$arquivoExterno = fopen("sorteio/sorteio.csv", "r");


while($row = fgetcsv($arquivoExterno, 1000, ",")){
    $vetorArquivoExterno[] = $row;
}

fclose($arquivoExterno);

$verSorteioGanhador1 = [$vetorArquivoExterno[0][1], $vetorArquivoExterno[0][5], $vetorArquivoExterno[0][6]];
$verSorteioGanhador2 = [$vetorArquivoExterno[1][1], $vetorArquivoExterno[1][5], $vetorArquivoExterno[1][6]];
$verSorteioGanhador3 = [$vetorArquivoExterno[2][1], $vetorArquivoExterno[2][5], $vetorArquivoExterno[2][6]];
