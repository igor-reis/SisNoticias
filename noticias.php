<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
include './biblioteca.php';

$sql = "select * from noticia";
$resultado = mysql_query($sql);

echo "<div align='center'><img src=img_sis/bannernews.png width=500 height=100 /></td></tr>";
echo "<br>";
while($linha = mysql_fetch_array($resultado)){
	$id  = $linha["codigo"];
	$titulo = $linha["titulo"];
	$assunto = $linha["assunto"];
	$imagem = $linha["imagem"];
	$data = $linha["data"];
    
	
	echo "<html><body alink='#CCff33' vlink='#000000'>";
	echo "<table align=center border='0'>";
        echo "<font face='verdana' size='1' color='FFFFFF'>";
	echo "<tr><td height='10' ><div align='center'><b><font size=5 color=#FF0000>$titulo</font></b></div></td></tr>";
	echo "<tr><td height='5' bgcolor='#CCffCC'><div align='justify'>$assunto</div></a></td></tr>";
	echo "<tr><td><div align='center'><img src=$imagem width=150 height=150 /></td></tr>";
	echo "<tr><td><a href='ver.php?id=$id'><div align='center'>Continue lendo...</div></a></td></tr><br>";
	
	echo "</font>";
	}//fechando o while
	echo "</table>";
	echo "</body>";
	echo "</html>";


?>
</body>
</html>