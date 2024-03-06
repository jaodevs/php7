<?php
$frase = "A repetição é mãe da retenção.";

$plavra = "mãe";

$q = strpos($frase, $plavra);

$texto2 = substr($frase, $q + strlen($plavra), strlen($frase));

$texto = substr($frase, 0, $q);

var_dump($texto);

echo "<br>";

var_dump($texto2);

echo "<br>";

var_dump($q);

