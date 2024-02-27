<title>Apagar Noticia</title>
<body bgcolor="#33FF66">
<?PHP
//Utiliza a biblioteca criada anteriormente
//conecta no banco de dados
include "./verifica.php";
include './biblioteca.php';

//Receber o paramentro id enviado via GET
$id = $_GET["id"];

//Comando sql para apagar um registro
$sql = "delete from noticia where codigo=$id";

//Executra o comando no banco
mysql_query($sql);

echo "<p align=center>Registro apagado com sucesso. <br /> <a href=\"gerencia.php\">Voltar</a>" . "<BR>";
	
?>
</body>