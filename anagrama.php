<?php

include_once('menu.php');

function is_anagrama($a, $b)
 {
       if (count_chars($a, 1) == count_chars($b, 1))
    {
        return "São anagramas";
    }
    else
    {
        return "Não são angramas";
    }
 }
 function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
}

?>
<html>
<head>
<title> Anagrama </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div >
<h4>Veja se é um anagrama:</h4> 
<form method="POST" action="">
<label>Palavra 1:</label><input type="text" name="p1" id="p1" ><br>
<label>Palavra 2:</label><input type="text" name="p2" id="p2"><br>
<input type="submit" value="Verificar" id="Verificar" name="Verificar"><br>
</form>
</div>
<br>
<br>
<?php 
	if(isset($_POST["Verificar"]) && $_POST["Verificar"] == "Verificar"){ 
		if((empty($_POST["p1"]))||(empty($_POST["p2"]))) {
		 echo"<script language='javascript' type='text/javascript'>alert('Os campos não podem estar vazios');window.location.href='anagrama.php'</script>";
		}
		else {
			$a=strtolower($_POST["p1"]);
			$b=strtolower($_POST["p2"]);
			$a=tirarAcentos($a);
			$b=tirarAcentos($b);
			$permutacao = is_anagrama($a,$b);
			echo $permutacao;
		}
		
   }
?>         

</body>
</html>

