<?php
$numero = 3;

for ($i = 1; $i <= 10; $i++) {
    // \r\n para quebra de linha, se for abrir na web poderia ser utilizado o <br> para quebra de linha
    echo "$numero x $i = " . $numero * $i . "\r\n"; 
}