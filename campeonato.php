<?php

include_once('menu.php');?>
<html>
<head>
<title> Campeonato Libertadores </title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
</head>
<body>
Problema 3:
<br>
Sql que podem ser executadas: 
<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-1)  order by R.pontos desc limit 6)<br>
UNION<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-2)  order by R	.pontos desc limit 6)<br>
UNION<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-3)  order by R	.pontos desc limit 6)<br>
UNION<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-4)  order by R	.pontos desc limit 6)<br>
UNION<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-5)  order by R	.pontos  desc limit 6)<br>
<br>
ou
<br>
SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato order by R.pontos desc limit 30;

<br>
</body>
</html>

<?php
/*Faça uma query SQL que retorne a lista dos times que se classificaram para a Libertadores nos últimos 5 anos. 
Os 6 primeiros times do campeonato se classificam para a Libertadores. 
Os resultados devem aparecer em ordem decrescente, ordenados por ano de realização do torneio e 
classificação final do time.*/

 if(!($conectar = mysqli_connect("localhost","root",""))){
          echo"<script language='javascript' type='text/javascript'>alert('Erro de conexão, tente mais tarde1 ')</script>";
      }else{
         if(!($con = mysqli_select_db($conectar,"teste_campeonato"))){
           echo"<script language='javascript' type='text/javascript'>alert('Erro de conexão, tente mais tarde2')</script>";          
         }
        
      }
      $sql="(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-1)  order by R.pontos desc limit 6)";
$sql.="UNION";
$sql.="(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-2)  order by R	.pontos desc limit 6)";
$sql.="UNION";
$sql.="(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-3)  order by R	.pontos desc limit 6)";
$sql.="UNION";
$sql.="(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-4)  order by R	.pontos desc limit 6)";
$sql.="UNION";
$sql.="(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-5)  order by R	.pontos  desc limit 6)";
    $q_usuario= mysqli_query($conectar,$sql);      
      $d_usuario =
     "<table border>
			  <tr>
			  <td>Times</td><td>Ano</td>	<td>Pontos</td>		
			  </tr>";		
	while($linha = mysqli_fetch_array($q_usuario)){
   	$d_usuario .="<tr>
			  <td>".$linha["nome"]."</td> <td>".$linha["ano"]."</td> <td>".$linha["pontos"]."</td>				 	
			  </tr>";
	}
 	$d_usuario .="</table>";
  echo $d_usuario;  
?>