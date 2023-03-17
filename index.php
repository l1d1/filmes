<?php
require_once 'cabecalho.php';?>

<div id="topo">
    <div id="logo">
	<a href="index.php"><img src="img/hnh.jpg"></a>
	</div>
	<div id="menu">
    <ul class="nav">
			<li>Cadastrar
				<ol>
					<li><a href="cadastrarFilme.php" target="quadro">Cadastrar</a></li>
				</ol>
			</li>
			<li>Listar
				<ol>
					<li><a href="listarFilme.php" target="quadro">Listar</a></li>
				</ol>
			</li>
		</ul>
	</div>	
</div>
<div id="principal">
	<iframe src="home.php" name="quadro"></iframe>
</div>
<div id="rodape">

</div>
</body>
</html>
