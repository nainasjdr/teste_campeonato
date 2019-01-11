<?php

include_once('menu.php');

function fibonaci($i)
 {
   if($i < 2)
        return $i;
   else
       return fibonacci($i - 1) + fibonacci($i - 2); 

 }
function getFibonaci($a){
	for($i = 0; $i <= $a; $i++){
        $v[$i]=fibonacci($i);
	}
	return$v;
}

?>
<html>
<head>
    <title>Arquivo texto:Fibonacci</title>
</head>
<body>
<h4>Upload o arquivo texto</h4>
 <div>
<form method="post" action="recebe_upload.php" enctype="multipart/form-data">
<label>Arquivo:</label>
<input type="file" name="arquivo" />
<input type="submit" value="Enviar" />
</form>
 </div>
</body>
</html>



