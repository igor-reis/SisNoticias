<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gravar Noticia</title>
</head>

<body bgcolor="#33FF66">
<?php
//utiliza a biblioteca criada anteriormente
//conecta no banco de dados
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

//recebe os dados enviados da pagina anterior
//enviados via post

$vTitulo = $_POST["titulo"];
$vAssunto = $_POST["assunto"];
$vData = $_POST["data"];
$vNoticia = $_POST["noticia"];
$vImagem = $arquivo_nome;

//o comando sql para gravar no banco de dados é o comando insert
$sql = "INSERT INTO noticia (titulo, assunto, data, texto, imagem) VALUE ('$vTitulo', '$vAssunto', '$vData', '$vNoticia', '$vImagem');";

//executa o comando no banco de dados
mysql_query($sql) or die ("Erro ao conectar com o Banco de Dados");

echo "<p align=center>Salvo com sucesso. <br /> <a href=\"gerencia.php\">Voltar</a></p>";
?>
</body>

</body>
</html>