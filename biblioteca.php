
<?php
$conect = mysql_connect("localhost", "root", "");
if (!$conect) die ("<p align=center><img width=100 height=100 title='Falha ao conectar com o Banco de Dados!' src=img_sis/iconeerro.jpg /><br>Falha ao conectar com o Banco de Dados!");
$db = mysql_select_db("noticias");
?>
