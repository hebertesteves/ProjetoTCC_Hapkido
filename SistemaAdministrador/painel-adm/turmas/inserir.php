<?php 
require_once("../../conexao.php"); 

$disciplina = $_POST['disciplina'];
$sala = $_POST['sala'];
$professor = $_POST['professor'];
$data_inicio = $_POST['data_inicio'];
$data_final = $_POST['data_final'];
$horario = $_POST['horario'];
$dia = $_POST['dia'];
$ano = $_POST['ano'];

$id = $_POST['txtid2'];


if($id == ""){
	$res = $pdo->prepare("INSERT INTO turmas SET disciplina = :disciplina, sala = :sala, professor = :professor, data_inicio = :data_inicio, data_final = :data_final, horario = :horario, dia = :dia, ano = :ano");	

}else{
	$res = $pdo->prepare("UPDATE turmas SET disciplina = :disciplina, sala = :sala, professor = :professor, data_inicio = :data_inicio, data_final = :data_final, horario = :horario, dia = :dia, ano = :ano WHERE id = '$id'");

	
}

$res->bindValue(":disciplina", $disciplina);
$res->bindValue(":sala", $sala);
$res->bindValue(":professor", $professor);
$res->bindValue(":data_inicio", $data_inicio);
$res->bindValue(":data_final", $data_final);
$res->bindValue(":horario", $horario);
$res->bindValue(":dia", $dia);
$res->bindValue(":ano", $ano);


$res->execute();


echo 'Salvo com Sucesso!';

?>