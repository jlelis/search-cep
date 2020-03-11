<?php
require_once "vendor/autoload.php";

use Jlelis\DigitalCep\Search;

$buscaCep = new Search;
$resultado = $buscaCep->getCep('79570000');

print("<pre>" . print_r($resultado, true) . "</pre>");
