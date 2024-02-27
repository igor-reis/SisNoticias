<?php
// Conexão com o banco de dados
include './biblioteca.php';

// Inicia sessões
session_start();

// Recupera o login
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ? addslashes(trim($_POST["senha"])) : FALSE;

// Usuário não forneceu a senha ou o login
if(!$login || !$senha)
{
    echo "<p align=center><body bgcolor=#33FF66>Você deve digitar sua senha e login!</body>";
	echo "<p align=center><a href=\"index.html\" target='_top'>Voltar</a>" . "<BR>";
    exit;
}

/**
* Executa a consulta no banco de dados.
* Caso o número de linhas retornadas seja 1 o login é válido,
* caso 0, inválido.
*/
$SQL = "SELECT codigo, nome, login, senha
        FROM usuario
        WHERE login = '" . $login . "'";
$result_id = @mysql_query($SQL) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_id);

// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($total)
{
    // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
    $dados = @mysql_fetch_array($result_id);

    // Agora verifica a senha
    if(!strcmp($senha, $dados["senha"]))
    {
        // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário
        $_SESSION["id_usuario"]   = $dados["codigo"];
        $_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
		echo("<script language=\"javascript\">");
echo("top.location.href = \"gerencia.php\";");
echo("</script>");
		//header("Location: gerencia.php");
        exit;
    }
    // Senha inválida
    else
    {
         echo "<p align=center><body bgcolor=#33FF66>Senha inválida</body>";
	echo "<p align=center><a href=\"index.html\" target='_top'>Voltar</a>" . "<BR>";
        exit;
    }
}
// Login inválido
else
{
     echo "<p align=center><body bgcolor=#33FF66>Usuário inválido!</body>";
	echo "<p align=center><a href=\"index.html\" target='_top'>Voltar</a>" . "<BR>";
    exit;
}
?>

