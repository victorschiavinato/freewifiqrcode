<?php
$arquivo = "visitas.txt";

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, "0");
}

$visitas = (int) file_get_contents($arquivo);
$visitas++;
file_put_contents($arquivo, $visitas);

echo $visitas;
?>