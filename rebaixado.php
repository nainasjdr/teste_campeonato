<?php

include_once('menu.php');?>
<html>
<head>
<title> Campeonato Libertadores </title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
</head>
<body>
Problema 4:
<br>
Sql que podem ser executadas: 
<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-1)  order by R.pontos limit 6)<br>
UNION<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-2)  order by R	.pontos limit 6)<br>
UNION<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-3)  order by R	.pontos limit 6)<br>
UNION<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-4)  order by R	.pontos  limit 6)<br>
UNION<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-5)  order by R	.pontos   limit 6)<br>
<br>......<br>
UNION<br>
(SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato where C.ano=(year(now())-30)  order by R	.pontos   limit 6)<br>
<br>
ou (30 anos x 4 times)
<br>
SELECT T.nome, C.ano, R.pontos FROM time T INNER JOIN resultado R on T.id_time=R.id_time INNER JOIN campeonato C on C.id_campeonato=R.id_campeonato order by R.pontos limit 120;

<br>
</body>
</html>

