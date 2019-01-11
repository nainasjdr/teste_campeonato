<?php

include_once('transformaFibonacci.php');

$_UP['pasta'] = 'uploads/';
 
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
 

$_UP['extensoes'] = array('txt');

$_UP['renomeia'] = false;
 

$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
if ($_FILES['arquivo']['error'] != 0) {
die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
exit; 
}
 
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
}
else {

if ($_UP['renomeia'] == true) {

$nome_final = time().'.txt';
} else {

$nome_final = $_FILES['arquivo']['name'];
}
 

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

echo "Upload efetuado com sucesso!";

trasnformaTexto($_UP['pasta'] . $nome_final) ;
} else {

echo "Não foi possível enviar o arquivo, tente novamente";
}
 
}
 
?>


