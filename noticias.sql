-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `noticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `assunto` varchar(500) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `texto` longtext NOT NULL,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`codigo`, `titulo`, `assunto`, `data`, `texto`, `imagem`) VALUES
(1, 'Internautas vÃ£o sentir diferenÃ§a com o Marco Civil, diz Molon ', 'Alessandro Molon garante que as mudanÃ§as sÃ£o positivas e que a votaÃ§Ã£o no Senado deve caminhar em ritmo acelerado ', '2014-03-27 22:24:17', '<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;"><em>Por Murilo Roncolato</em></p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;"><em>S&atilde;o Paulo (AE) - ENTREVISTA</em>&nbsp;Alessandro Molon, deputado federal (PT-RJ) e relator do projeto H&aacute; muitas d&uacute;vida e desinforma&ccedil;&atilde;o entre os usu&aacute;rios de internet sobre o projeto. O Marco Civil vai afetar a vida dessas pessoas?</p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">ALESSANDRO MOLON - O Marco Civil se tornando lei far&aacute; uma enorme diferen&ccedil;a para todo internauta brasileiro, com destaque para a conquista de novos direitos. Lamento as desinforma&ccedil;&otilde;es divulgadas e garanto que todo temor que existe sobre censura ou controle cair&aacute; por terra quando todos entenderem o conte&uacute;do do projeto. Trata-se de um projeto que assegura a liberdade que o usu&aacute;rio j&aacute; tem na web.</p>\r\n<h3 style="margin: 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif; text-align: center;"><em><strong>E agora tem o Senado...</strong></em></h3>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">ALESSANDRO MOLON - Todo tempo que foi gasto na C&acirc;mara reduz o tempo dele no Senado. &Eacute; muito grande a possibilidade de ele ser votado rapidamente l&aacute;. O ideal &eacute; que fosse votado antes da confer&ecirc;ncia internacional (23 e 24 de abril, em S&atilde;o Paulo). Isso consolidaria a posi&ccedil;&atilde;o do Brasil no campo da internet no cen&aacute;rio internacional. Mas o Senado &eacute; que sabe da sua pr&oacute;pria agenda.</p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Passado tanto tempo, o projeto ainda &eacute; de vanguarda, como disse Tim Berners-Lee (criador da web) em 2013?</p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">ALESSANDRO MOLON - O projeto continua &agrave; frente. Mais recentemente ele escreveu da Inglaterra sobre o Marco Civil novamente. A manifesta&ccedil;&atilde;o dele &eacute; importante e reflete a verdade. O Brasil est&aacute; na vanguarda e vai influenciar o mundo inteiro. Fico esperan&ccedil;oso sobre esse papel que o Brasil est&aacute; exercendo.</p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Acredita que o tema sobre data centers ser&aacute; de fato retomado?</p>\r\n<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;"><br /><br /></span></p>', 'imagens/news1.jpg'),
(2, 'Google e Facebook lideram publicidade em dispositivos mÃ³veis ', 'ParticipaÃ§Ã£o do Facebook na divulgaÃ§Ã£o mobile saltou de 5,4% para 17,5%. Em 2013 foram gastos US$ 18 bilhÃµes ', '2014-03-27 22:28:09', '<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;"><strong><em style="line-height: 1.5em;">Por Bruno Capelas</em></strong></p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;"><em>S&atilde;o Paulo (AE)</em>&nbsp;- Os gastos com publicidade direcionada para dispositivos m&oacute;veis chegaram a US$ 18 bilh&otilde;es em 2013, em crescimento de 105% com rela&ccedil;&atilde;o a 2012 segundo pesquisa divulgada pela consultoria eMarketer, especializada em an&uacute;ncios eletr&ocirc;nicos. O crescimento da &uacute;ltima temporada foi puxado pelos gigantes Google e Facebook, que, juntos, alcan&ccedil;aram US$ 6,9 bilh&otilde;es, ou cerca de 38% do faturamento total.</p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">O Facebook foi quem mais cresceu em 2013: sua participa&ccedil;&atilde;o no mercado saltou de 5,4% para 17,5% da publicidade mobile; j&aacute; o Google perdeu espa&ccedil;o, indo de 52,6% para 49,3%. O terceiro lugar foi ocupado pelo Twitter, que foi de 1,5% para 2,4%. Para 2014, as previs&otilde;es da eMarketer s&atilde;o bastante otimistas para esse setor: a taxa de crescimento da verba utilizada por ag&ecirc;ncias para anunciar em smartphones e tablets deve diminuir para 75% - o que n&atilde;o &eacute; exatamente um problema, considerado o aumento do &uacute;ltimo ano -, alcan&ccedil;ando US$ 34 milh&otilde;es.</p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">A eMarketer ainda prev&ecirc; que o Google perca ainda mais espa&ccedil;o nesse cen&aacute;rio, indo para 47% do total arrecadado com an&uacute;ncios em smartphones e tablets; j&aacute; Facebook e Twitter continuar&atilde;o a crescer, com 21,7% e 2,6% da fatia do bolo, respectivamente.</p>\r\n<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;"><br /><br />Leia mais em:&nbsp;<a style="text-decoration: none; color: #003399;" href="http://www.tecmundo.com.br/google/52923-google-e-facebook-lideram-publicidade-em-dispositivos-moveis.htm#ixzz2xClOj8qZ">http://www.tecmundo.com.br/google/52923-google-e-facebook-lideram-publicidade-em-dispositivos-moveis.htm#ixzz2xClOj8qZ</a></span></p>', 'imagens/news2.jpg'),
(3, 'Visual do Kinect 2 para Windows Ã© revelado', 'Equipe de desenvolvimento postou em seu blog oficial imagens do sensor e dos componentes que acompanham o equipamento ', '2014-03-28 20:11:22', '<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">No ano passado, a Microsoft disse que a segunda gera&ccedil;&atilde;o do&nbsp;<a style="text-decoration: none;" href="http://www.tecmundo.com.br/kinect?pag=1" target="_blank">Kinect</a>&nbsp;ganharia uma vers&atilde;o para Windows e desde ent&atilde;o n&atilde;o hav&iacute;amos ouvido mais nada a respeito. Ontem, por&eacute;m, no&nbsp;<a style="text-decoration: none;" href="http://blogs.msdn.com/b/kinectforwindows/" target="_blank">blog oficial</a>&nbsp;da equipe que tem desenvolvido o perif&eacute;rico, foram reveladas imagens que mostram como est&aacute; ficando seu visual, assim como algumas especifica&ccedil;&otilde;es.</p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">O acess&oacute;rio tem uma apar&ecirc;ncia bem similar &agrave; de sua vers&atilde;o para&nbsp;<a style="text-decoration: none;" href="http://www.baixakijogos.com.br/xbox/xbox-one" target="_blank">Xbox One</a>, com exce&ccedil;&atilde;o da palavra &ldquo;Kinect&rdquo; no topo do painel, substituindo o logotipo do Xbox. O &ldquo;X&rdquo; dentro da esfera, s&iacute;mbolo da marca, tamb&eacute;m foi eliminado, recebendo um LED que indica se o hardware est&aacute; ligado.</p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Sobre os demais componentes, h&aacute; um hub para cabos de transmiss&atilde;o de dados e uma fonte de energia. O hub aceita tr&ecirc;s conex&otilde;es: o cabo do sensor, a sa&iacute;da USB 3.0 para o PC e um cabo de energia. A fonte suporta voltagens de 100 V a 240 V e possui diferentes tipos de cabos que, segundo os desenvolvedores, podem variar entre as regi&otilde;es onde o produto for vendido.</p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;"><span class="img-fc"><img style="border: 0px;" src="http://img.ibxk.com.br/2014/3/materias/3522950272812147-t640.jpg" alt="Visual do Kinect 2 para Windows &eacute; revelado" /><span class="desc">&nbsp;(Fonte da imagem:&nbsp;<a style="text-decoration: none;" href="http://blogs.msdn.com/b/kinectforwindows/archive/2014/03/27/revealing-kinect-for-windows-v2-hardware.aspx" target="_blank">Divulga&ccedil;&atilde;o/Kinect for Windows Blog</a>)</span></span></p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">A op&ccedil;&atilde;o pela alimenta&ccedil;&atilde;o separada provavelmente est&aacute; relacionada ao fato de a maioria dos PCs n&atilde;o fornecer pelas portas USB energia o suficiente para manter o aparelho em pleno funcionamento &mdash; lembrando que no Xbox One tanto a energia quanto a transfer&ecirc;ncia de dados s&atilde;o feitas por um &uacute;nico cabo que &eacute; ligado do sensor ao console.&nbsp;</p>\r\n<h2 style="margin: 0px; padding: 0px; font-family: Arial, Helvetica, sans-serif;"><strong>Convoca&ccedil;&atilde;o de desenvolvedores</strong></h2>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Em 2013, a Microsoft lan&ccedil;ou um&nbsp;<a style="text-decoration: none;" href="http://www.tecmundo.com.br/kinect/47411-microsoft-comeca-a-entregar-novo-kit-do-kinect-2-0-para-desenvolvedores.htm" target="_blank">programa para recrutar desenvolvedores</a>&nbsp;interessados em trabalhar no Kinect para Windows. Os participantes, que tiveram de pagar uma taxa de US$ 400 e se inscrever at&eacute; 31 de janeiro de 2014, passaram a ter comunica&ccedil;&atilde;o direta com o time de engenheiros do projeto, al&eacute;m de receber informa&ccedil;&otilde;es privadas e ganhar duas vers&otilde;es do sensor &mdash; uma Alpha e uma final</p>\r\n<p>&nbsp;</p>', 'imagens/news3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `nome`, `login`, `senha`) VALUES
(1, 'Administrador', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
