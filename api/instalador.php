<?php
date_default_timezone_set("America/Fortaleza");
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
set_time_limit(0);
criarZip();

function rrmdir($dir)
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir . "/" . $object) == "dir") {
                    rrmdir($dir . "/" . $object);
                } else {
                    unlink($dir . "/" . $object);
                }
            }
        }
        reset($objects);
        rmdir($dir);
    }
}

function criarZip()
{
    is_dir("beta1");
    rrmdir("beta1/");
    mkdir("beta1");
    //   file_put_contents("beta1/beta.zip",file_get_contents("https://www.onesolucoes.com.br/atualizacao/beta.zip"));
    download("https://www.onesolucoes.com.br/atualizacao/beta.zip", "beta1/beta.zip");
    $file = 'beta1/beta.zip';
    $path = pathinfo(realpath($file), PATHINFO_DIRNAME);
    $zip = new ZipArchive;
    $res = $zip->open($file);
    
    if ($res === true) {
        $zip->extractTo($path);
        $zip->close();
        is_dir("beta1");
        $files = scandir("beta1");
        $fileCount = count($files) - 2;
        if($fileCount > 50){
            is_dir("beta");
            rrmdir("beta/");
            rename("beta1", "beta");
            $sourceFilePath = 'beta/api/instalador.php';
            $destinationFilePath = 'instalador.php';
            copy($sourceFilePath, $destinationFilePath);
        }else{
            is_dir("beta1");
            rrmdir("beta1/");
        }
        if(file_exists("beta/beta.zip")){
            unlink("beta/beta.zip");
        }    
    }

    is_dir("garcomdigital1");
    rrmdir("garcomdigital1/");
    mkdir("garcomdigital1");   
    //   file_put_contents("beta1/beta.zip",file_get_contents("https://www.onesolucoes.com.br/atualizacao/beta.zip"));
    download("https://www.onesolucoes.com.br/atualizacao/www.zip", "garcomdigital1/garcomdigital.zip");
    $file = 'garcomdigital1/garcomdigital.zip';
    $path = pathinfo(realpath($file), PATHINFO_DIRNAME);
    $zip = new ZipArchive;
    $res = $zip->open($file);
    is_dir("garcomdigital");
    rrmdir("garcomdigital/");
    if ($res === true) {
        $zip->extractTo($path);
        $zip->close();

        is_dir("garcomdigital1");
        $files = scandir("garcomdigital1");
        $fileCount = count($files) - 2;
        if($fileCount > 6){
            is_dir("garcomdigital");
            rrmdir("garcomdigital/");
            rename("garcomdigital1", "garcomdigital");
        }else{
            is_dir("garcomdigital1");
            rrmdir("garcomdigital1/");
        }
        if(file_exists("garcomdigital/garcomdigital.zip")){
            unlink("garcomdigital/garcomdigital.zip");
        }  
       
      echo json_encode("ok");
    }
}

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

}
