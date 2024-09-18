<?php
function contador($archivo)
{
    $clientes = fopen($archivo, 'rw');
    $leer = fread($clientes, filesize($archivo));
    $linea = explode(chr(13) . chr(10), $leer);
    $n = count($linea);
    return $n;
}
?>