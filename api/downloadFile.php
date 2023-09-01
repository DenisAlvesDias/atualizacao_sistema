<?php
date_default_timezone_set("America/Sao_Paulo");
header("Content-Type: text/xml");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=" . $_GET['nome'] . ".xml"); 
$arquivo =  $_GET['arquivo'];
readfile($arquivo);


?>