<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<?php
include './biblioteca.php';

$id = $_GET["id"];

$sql = mysql_query("select * from noticia where codigo=$id");


while($busca=mysql_fetch_array($sql)){


$titulo = $busca["titulo"];
$assunto = $busca["assunto"];
$data = $busca["data"];
$conteudo = $busca["texto"];
$imagem = $busca["imagem"];
$id	= $busca["codigo"];

echo "<title>$titulo</title>";
echo "<table align=center>";
echo "<tr><td witdh='500' align='center' valign='middle'>";
echo "<h1><b><font color=#FF0000>$titulo</font></b></h1>";
echo "</td></tr><tr>";
echo "<td width='200' valign='top'>";
echo "<div align='left'><font face='verdana' size=3px><b>$assunto</b></font></div><br>";
echo "<div align='justify'><font face='verdana' size=2px>$conteudo</font></div><br><br>";
echo "<div align='justify'><font face='verdana' size=1px><b>$data</b></font></div><br>";
echo "<tr><td><div align='center'><img src=$imagem  /></td></tr>";
echo "</td></tr><tr><td cols='8'>";
echo "</td></tr>";
echo "</table>";


// Inicia sessões
session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"]))
{
    // Usuário não logado! Redireciona para a página de login
    echo "<p align=center><a href=index.html target='_top'>voltar</a></p>";
    exit;
}


echo "<p align=center><a href=gerencia.php>voltar</a></p>";}
?>

 
</body></html>
