<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body bgcolor="#33FF66">
<?PHP
//utiliza a biblioteca criada anteriormente,
//connecta no banco de dados
include "./verifica.php";
include './biblioteca.php';


if(isset($_FILES["arquivo"])){
$arquivo = $_FILES["arquivo"];

$pasta_dir = "imagens/";//diretorio dos arquivos
//se nao existir a pasta ele cria uma
if(!file_exists($pasta_dir)){
mkdir($pasta_dir);
}

$arquivo_nome = $pasta_dir . $arquivo["name"];

// Faz o upload da imagem
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
}

//Recebe os dados enviados da página anterior
//enviados via post
$vCod = $_POST["cod"];
$vTitulo = $_POST["titulo"];
$vAssunto = $_POST["assunto"];
$vData = $_POST["data"];
$vNoticia = $_POST["noticia"];
$vImagem = $arquivo_nome;

if ($vImagem != "imagens/"){
	
//O comando sql para gravar no banco de dados é o comando insert
$sql = "UPDATE noticia SET titulo = '$vTitulo', assunto='$vAssunto', data='$vData', texto='$vNoticia', imagem='$vImagem' where codigo=$vCod";

//Executa o comando no banco de dados
mysql_query($sql);

echo "<p align=center>Alterado com sucesso. <br /> <a href=\"gerencia.php\">Voltar</a>";
} else {
	//O comando sql para gravar no banco de dados é o comando insert
$sql = "UPDATE noticia SET titulo = '$vTitulo', assunto='$vAssunto', data='$vData', texto='$vNoticia' where codigo=$vCod";

//Executa o comando no banco de dados
mysql_query($sql);

echo "<p align=center>Alterado com sucesso. <br /> <a href=\"gerencia.php\">Voltar</a>";
}

?>

</body>
</html>