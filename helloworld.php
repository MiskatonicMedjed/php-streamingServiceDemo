<?php
echo "Boas-vindas ao universo do PHP!" . PHP_EOL;
$metro = $argv[1];
$ano = $argv[2];

echo $metro * 100 . " centimetros." . " Você inseriu " . $metro . " metros para serem convertidos." . PHP_EOL;

function ehBissexto($ano) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

// Testando a função com alguns exemplos
$anos = array(2000, 2001, 2004, 1900, 2020, 2023);

foreach ($anos as $ano) {
    if (ehBissexto($ano)) {
        echo "O ano $ano é bissexto.\n";
    } else {
        echo "O ano $ano não é bissexto.\n";
    }
}
