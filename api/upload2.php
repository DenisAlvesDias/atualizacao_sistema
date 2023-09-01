<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include("resize-class.php");
upload();
function upload(){
if ( !empty( $_FILES ) || $_FILES["fname"]["type"] == "image/jpeg" ) {
    $tempPath = $_FILES[ 'image' ][ 'tmp_name' ];
    echo $tempPath;
    $size = getimagesize($tempPath);
$ratio = $size[0]/$size[1]; // width/height
if( $ratio > 1) {
    $width = 500;
    $height = 500/$ratio;
}
else {
    $width = 500*$ratio;
    $height = 500;
}
    $date=new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d-H-i-s');
    $nomeArquivo = $result . $_FILES[ 'image' ][ 'name' ];
  
    $uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR .$nomeArquivo;
   
    move_uploaded_file( $tempPath, $uploadPath );
    $answer = array( 'answer' => 'File transfer completed' );
    $json = json_encode( $answer );
   redmensionarLogo($nomeArquivo, $width, $height);
   $answer = array( 'answer' => 'File transfer completed' );
    echo json_encode($nomeArquivo);
} else {
    echo 'No files';
}
}


function redmensionarLogo($nomeArquivo, $width, $height){
    // *** 1) Initialise / load image
 $oImg = new m2brimagem();
$oImg->carrega("uploads/".$nomeArquivo);
        $valida = $oImg->valida();
        if($valida == "OK"){       
            $oImg->redimensiona($width,$height, '');
            $oImg->grava("uploads/".$nomeArquivo);
        }
    
}

?>