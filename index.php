<?php


$arquivoValido  = false;
$emailValido = false;

#1 válido nos dois
if ($arquivoValido == true and $emailValido == true ) {
    echo " Envidado </ br > " ;
}

#2 válido somente temEmail
if ($arquivoValido == true and $emailValido != true) {
    echo " Email informado não é válido </ br > " ;
}
#3 válido somente emailValido
if ($arquivoValido != true and $emailValido == true) {
    echo " Arquivo selecionado não é válido </ br > ";
}
#4 os dois dados estão inválidos
if ($arquivoValido == false and $emailValido == false) {
    echo " Os dois arquivos informados estão inválidos </ br > ";
}
var_dump ($arquivoValido, $emailValido);

