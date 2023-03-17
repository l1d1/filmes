<?php
require_once './persistence/Banco.php';

function cadastrarFilme($cod_fil,$nome_fil,$diretor_fil,$lancamento_fil,$duracao_fil,$quantidade_fil,$valor_fil){
	$banco=new Banco();
	$sql="insert into filme values($cod_fil,'$nome_fil','$diretor_fil','$lancamento_fil','$duracao_fil',$quantidade_fil,$valor_fil)";
	$resposta=$banco->executar($sql);
	if(!$resposta){
		return false;
	}else{
		return true;
	}
}

function retornaUltimoFilme(){
	$banco=new Banco();
	$sql="select max(cod_fil) from filme";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		while($linha=$consulta->fetch_assoc()){
			$codigo=$linha['max(cod_fil)'];
		}
	} return $codigo;

}

function listarFilme(){
	$banco=new Banco();
	$sql="select * from filme order by cod_fil";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		return $consulta;
	}
}
?>