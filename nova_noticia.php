<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nova Noticia</title>
</head>
<?php
include "./verifica.php";
include './biblioteca.php';

$timestamp = time(); // Salva o timestamp atual numa variável

$hora = date('Y-m-d H:i:s', $timestamp);
?>
<body bgcolor="#33FF66">
<table align="center" border="5" bgcolor="#33CCCC">
  <tr>
    <td><h1>Nova Noticia</h1>
<form name="form" method="post" action="gravar_noticia.php" enctype = "multipart/form-data">
  <p>Titulo:&nbsp;&nbsp;&nbsp;
  <input name="titulo" type="text" size="50"  /> </p>
    <p>Assunto:
    <input name="assunto" type="text" size="50"  /> </p>
    <p>Data:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="data" type="text" size="20" value="<?php echo $hora; ?>" /> </p>
    <p>Noticia:
    <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <textarea name="noticia" cols="100" rows="20"></textarea>
  </p>
    <p>Imagem:
   <input type="file" name="arquivo"/>  
    </p>
       <p align="center"><input name="salvar" type="submit" value="Salvar" /></p>
    </form>

    <p align="center"><a href="gerencia.php">voltar</a></p></td>
  </tr>
</table>

</body>
</html>
