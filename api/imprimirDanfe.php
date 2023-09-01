<?php
date_default_timezone_set("America/Fortaleza");
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$entityBody = file_get_contents('php://input');
$str = $entityBody . "";
$_REQUEST = json_decode($str . "", true);

if (!file_exists('danfe')) {
    mkdir('danfe', 0777, true);
}

$url = "https://www.onesolucoes.com.br/emissorNfce/api/danfe/index.php?chave=" . $_REQUEST['chave']. "&cnpj=" . $_REQUEST['cnpj'] . "&emissao=" . $_REQUEST['emissao'];
$arquivo = "danfe/" . $_REQUEST['chave'] . ".pdf";
download($url, $arquivo);

function download($file_url, $destination_path)
{

    $fp = fopen($destination_path, "w+");

    $ch = curl_init($file_url);
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_exec($ch);
    $st_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    fclose($fp); 
    
    if($ph = printer_open()) {
        $fh = fopen($destination_path, "rb"); 
           $content = fread($fh, filesize($destination_path)); 
           fclose($fh); 
        
           // Set print mode to RAW and send PDF to printer 
           printer_set_option($ph, PRINTER_MODE, "RAW"); 
           printer_write($ph, $content); 
           printer_close($ph); 
        } 
        unlink($destination_path);
        echo json_encode("ok");

} 