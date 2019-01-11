<?php

include_once('menu.php');

function fibonaci($i)
 {
   if($i < 2)
        return $i;
   else
       return fibonaci($i - 1) + fibonaci($i - 2); 

 }
function getFibonaci($a){
	for($i = 0; $i <= $a; $i++){
       $n=fibonaci($i);
       if($n<=$a) {$v[]=$n; }
       else {return$v;}
	}	
}
//conta a quantidade de linhas do arquivo
function contarLinhas($arquivo) {
    for ($linhas = 0, $arq = fopen($arquivo, 'r'); !feof($arq); $linhas++)
       $texto[]= fgets( $arq);       
    fclose( $arq);   
   return $texto;
 }
 function trasnformaTexto ($arquivo) {
 	echo "<h1>Texto transformado</h1><br>";
 	$texto=contarLinhas($arquivo); 
 	$i=count($texto)-1;	
	$fib=getFibonaci($i); 
	for($j = 0; $j <= $i; $j++){
	  if(!(in_array($j,$fib))) {
		$flinhas[]=$j;			
	}
}	
	$linhas= array_merge($fib, $flinhas);
	$l=array_shift($linhas);
	$l=array_shift($linhas);
	   for($j = 0; $j <= $i-1; $j++){
   	echo $linhas[$j]." ".$texto[$linhas[$j]-1]. "<br>";
	}
 }
?>