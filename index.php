<?php
include_once("testePOO.php");





$teste = new Campo("campo","input",10,"ola","campotxt");
$teste->montacampo();// aqui pega os atributos e monta o campo
// fazer metodo para multiplicar campos caso precise
echo $teste->gethtml();//aqui gera













?>