<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
</head>
<body>

<form action="cadastrarFilme.php" method="POST">
	<h1>Cadastro de Filme</h1>
	<br>
	<p>Nome do Filme: 
	<input type="text" name="nome" size="80" maxlength="80" required></p>
	<p>Nome do Diretor:
	<input type="text" name="diretor" size="75" maxlength="75" required></p>
	<p>Data de Lançamento: 
    <input type="date" name="data" value="0000-00-00" min="1820-01-01" max="2023-03-17" required></p>
    <p>Duração: 
    <input type="time" name="duracao" required></p>
    <p>Quantidade: 
    <input type="number" name="quantidade" required></p>
    <p>Valor: 
    <input type="text" name="valor" pattern="[0-9]{1,8}\.[0-9]{2}" placeholder="999.99" title="Somente números, centavos obrigatórios, ponto e não vírgula EX:99.99" required></p>
    <br>
    <p><input type="submit" class="enviar" value="Cadastrar"></p>
</form>

<?php
if(isset($_POST['nome'])){
	$nome=$_POST['nome'];
	$diretor=$_POST['diretor'];
	$data=$_POST['data'];
	$duracao=$_POST['duracao'];
	$quantidade=$_POST['quantidade'];
	$valor=$_POST['valor'];
	require_once 'model/Filme.php';
	$codigo=retornaUltimoFilme();
	if(!$codigo){
		echo "<h2>Não há filme cadastrado</h2>";
	}else{
		$codigo++;
		$resposta=cadastrarFilme($codigo,$nome,$diretor,$data,$duracao,$quantidade,$valor);
		if(!$resposta){
			echo "<h2>Falha na tentativa de cadastro!</h2>";
		}else{
			echo "<h2>Cadastrado com sucesso!</h2>";
		}
	}
}

?>

</body>
</form>
</html>