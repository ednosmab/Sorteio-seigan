<?php

// Realizando sorteio
$arquivoExterno = fopen("infoContato/Informações de contato.csv", "r");

$header = fgetcsv($arquivoExterno, 1000, ",");

while($row = fgetcsv($arquivoExterno, 1000, ",")){
    $vetorArquivoExterno[] = array_combine($header, $row);
}

foreach($vetorArquivoExterno as $valor => $chave){
    if($chave["Minha posição na atividade"] != "Trabalho na comissão da atividade" &&
       $chave["Minha posição na atividade"] != "Participo de alguma comissão da atividade" &&
       $chave["Minha posição na atividade"] != "Participo da comissão da atividade" &&
       $chave["Nome Completo"] != "Jean Carlo Padoin Camilo"){
        $vetorSorteio[] = $chave;
    }
}


foreach ($vetorSorteio as $valor => $chave) {
    $nomeCompletoGanhador[] = $chave["Nome Completo"];
}

fclose($arquivoExterno);
$sorteio =  array_rand($nomeCompletoGanhador, 3);


$ganhador1 = $nomeCompletoGanhador[$sorteio[0]];
$ganhador2 = $nomeCompletoGanhador[$sorteio[1]];
$ganhador3 = $nomeCompletoGanhador[$sorteio[2]];

$dados = [$vetorSorteio[$sorteio[0]],
          $vetorSorteio[$sorteio[1]],
          $vetorSorteio[$sorteio[2]]];

// Salvando sorteio
if(!file_exists("sorteio/sorteio.csv")){
    $sorteioSalvo = fopen("sorteio/sorteio.csv", "x");
    
    foreach($dados as $linhas){
        fputcsv($sorteioSalvo, $linhas);
    }
        
    fclose($sorteioSalvo);
}

header("location:index.php");