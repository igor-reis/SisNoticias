<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administração</title>
</head>

<body>
<?php
include "./verifica.php";
include './biblioteca.php';


echo "<p align=center><font face=\"Verdana\" size=3>Bem-Vindo ". $_SESSION["nome_usuario"] ."!<BR>\n";

echo "<p align=right><a href=\"sair.php\"><img width=40 height=40 title='Sair do sistema' src=img_sis/iconesair.png /></a><a href=\"index.html\" target='_top'><img width=40 height=40 title='Voltar' src=img_sis/iconevoltar.jpg /></a>";




//o comando sql para retornar todos os registros do banco de dados
$sql = "select * from noticia ";


//executa o comando no banco de dados e guarda o resultado na variável
$resultado = mysql_query($sql);

echo "<br />";

//construção da tabela com os resultados da consulta
echo "<p align=left><img width=300 height=80 src=img_sis/bannernews1.png /></p>";

echo
"<table bgcolor=#FFFF99 border=3 bordercolor=#FF0000>
    <thead >
	    <tr >
		    <th>Codigo</th>
			<th>Titulo</th>
			<th>Assunto</th>
			<th>Data</th>
			<th>Alterar</th>
			<th>Apagar</th>
			<th>Visualizar</th>
		</tr>
	<thead>
	<tbody>";
	
	
	    //percorrer todos os registros da tabela disciplina
		while($linha = mysql_fetch_array($resultado)) {
			echo "<tr>";
			echo "<td>" . $linha["codigo"] . "</td>";		
			echo "<td>" . $linha["titulo"] . "</td>";	
			echo "<td>" . $linha["assunto"] . "</td>";	
			echo "<td>" . $linha["data"] . "</td>";		
			echo "<td> <a href=\"alterar_noticia.php?id=". $linha["codigo"] . "\"><img width=30 height=30 title='Alterar noticia' src=img_sis/edt.png /></a></td>";
			echo "<td> <a href=\"apagar_noticia.php?id=". $linha["codigo"] . "\"><img width=30 height=30 title='Excluir noticia' src=img_sis/rmv.jpg /></a></td>";
			echo "<td> <a href=\"ver.php?id=". $linha["codigo"] . "\"><img width=30 height=30 title='Visualizar noticia' src=img_sis/vis.jpg /></a></td>";
			echo "</tr>";
		}
		echo  "</tbody></table>";
		
		echo "<br><a href=\"nova_noticia.php\"><img  width=50 height=50 title='Adicionar nova noticia' / src=img_sis/add.png /></a>" . "<BR>";
?>

</body>
</html>