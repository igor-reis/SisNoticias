<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body bgcolor="#33FF66">

<form action="gravadisciplina.php" method="post">
<fieldset  style="width:200px; height:200px; float:left; margin-right:20px;">
<legend align="center"></legend>
<img  width=200 height=200 title='' / src=img_sis/logosis.jpg />
</fieldset>
</form>
<form action="gravadisciplina.php" method="post">
<fieldset  style="width:200px; height:200px; float:right; margin-right:20px;">
<legend align="center"></legend>
<img  width=200 height=200 title='' / src=img_sis/logoescola.jpg />
</fieldset>
</form>
<?php

// Inicia sessões
session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"]))
{
    // Usuário não logado! Redireciona para a página de login
   echo "<form action='verificar_login.php' method='post'>
<fieldset style=width:700px; height:200px; float:left; margin-right:20px;>
<legend align=center>Painel Administrativo</legend>
<p align=center>Usuário:&nbsp;&nbsp;
<input type=text name=login size='10' value=''/>  </p>
<p align=center>Senha:&nbsp;&nbsp;&nbsp;&nbsp;
<input type=password name=senha size='10' value=''/> </p>
<br />
<p align=center><input type='submit' value=Entrar />
</fieldset>
</form>";
    exit;
}
echo "<br><br><br><br><br><p align=center><a href=\"gerencia.php\" target='_top'><img width=150 height=30 title='Acessar sistema' src=img_sis/iconeacessar.png /></a>";	
echo "<p align=center><a href=\"sair.php\" target='_top'><img width=30 height=30 title='Sair do sistema' src=img_sis/iconesair.png /></a>";
echo "<p align=right><i><font face=\"Verdana\" size=2>Conectado como ". $_SESSION["nome_usuario"] ."!<BR>\n";
 
?>
</body>
</html>