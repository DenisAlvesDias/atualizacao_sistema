<?php
header('Content-type: application/pdf');
 function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
$returned_content = get_data($_GET['url'] . '&cnpj=' . $_GET['cnpj'] . '&emissao=' . $_GET['emissao']);
echo $returned_content;
?>