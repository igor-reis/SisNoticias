<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar Noticia</title>
</head>
<body bgcolor="#33FF66">
<?PHP
//Utiliza a biblioteca criada anteriormente,
//Connecta no banco de dados
include "./verifica.php";
include './biblioteca.php';

//Receber o parametro id enviado via GET
$id = $_GET["id"];

//Precisamos pegar os dados desse registro
$sql = "select * from noticia where codigo=$id";

//Executa o comando no banco de dados,
//e aguarda o resultado na vari�vel
$resultado = mysql_query($sql);

if($linha = mysql_fetch_array($resultado)) {
?><table align="center" border="5" bgcolor="#33CCCC">
  <tr>
    <td><form name="form" method="post" action="gravar_alteracao_noticia.php" enctype = "multipart/form-data">
<h1>Alterar Noticia <?= $linha["codigo"]?></h1>
<input type="hidden" name="cod" value="<?= $linha["codigo"]?>" /> 
  <p>Titulo:&nbsp;&nbsp;&nbsp;
  <input name="titulo" type="text" size="120"  value="<?= $linha["titulo"]?>"  /> </p>
    <p>Assunto:
    <input name="assunto" type="text" size="120" value="<?= $linha["assunto"]?>"  /> </p>
    <p>Data:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="data" type="text" size="20"  value="<?= $linha["data"]?>"  /> </p>
    <p>Noticia:
    <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name="noticia" cols="80" rows="20" ><?= $linha["texto"]?></textarea>
  </p>
    <p>Imagem:
    <input type="file" name="arquivo"/>   </p>
    <p align="center"><input name="salvar" type="submit" value="Alterar" /></p>
    <p align="center"><a href="gerencia.php">voltar</a></p>
</form></td>
  </tr>
</table>



<?PHP
}
?>
</body>
</html>