<?php

//Conexão com banco de dados
$hostname = "localhost";
$bancodedados = "dados";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno) {
    echo "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else {
    echo "Seja Bem vindo";
}
//Conexão com banco de dados

    $sql_code = "SELECT * FROM dadosexcel";
    $sql_query = $mysqli->query($sql_code) or die("Error ao consultar! " . $mysqli->error);

    //Dados puxados do erro 1
    $sql_code_error1 = "SELECT * FROM `dadosexcel` where v1 = 10000";
    $sql_query_error1 = $mysqli->query($sql_code_error1) or die("Error ao consultar! " . $mysqli->error);
    //Dados puxados do erro 1

    //Dados puxados do erro 2
    $sql_code_error2 = "SELECT * FROM `dadosexcel` where v1 = 20000";
    $sql_query_error2 = $mysqli->query($sql_code_error2) or die("Error ao consultar! " . $mysqli->error);
    //Dados puxados do erro 2

    //Dados puxados do erro 3
    $sql_code_error3 = "SELECT * FROM `dadosexcel` where v2 = 30000";
    $sql_query_error3 = $mysqli->query($sql_code_error3) or die("Error ao consultar! " . $mysqli->error);
    //Dados puxados do erro 3

    //Dados puxados do erro 4
    $sql_code_error4 = "SELECT * FROM `dadosexcel` where v7 = 10000";
    $sql_query_error4 = $mysqli->query($sql_code_error4) or die("Error ao consultar! " . $mysqli->error);
    //Dados puxados do erro 4
?>


<!-- tela de visualização html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Problems</title>
</head>
<body>
    <h1>Consulta de Problemas Encontrados</h1>
    <h3>Erro número 1 = uma pessoa que não tem telefone celular (v1=2) respondeu dentre as perguntas v2 a v6</h3>
    <h4>Total = 7 erros</h4>
    <h3>Erro número 2 = uma pessoa que não respondeu a v7 a menos que tenha baixado o app da empresa (v5=1 and v7 = null)</h3>
    <h4>Total = 40 erros</h4>
    <h3>Erro número 3 = uma pessoa que não possui aparelho celular do tipo smartphone (v2=2) respondeu dentre as perguntas v3 e v6</h3>
    <h4>Total = 7 erros</h4>
    <h3>Erro número 4 = uma pessoa que não possui internet (v7=2) respondeu dentre as perguntas v8 ou v9</h3>
    <h4>Total = 7 erros</h4>

    <form method="GET" action="">
        <select required name="busca" name="error">
            <option value="">Error Nº1</option>
            <?php  while($error1 = $sql_query_error1->fetch_assoc()) {  ?>
                <option value=" <?php echo $error1['id']; ?>">Id Respostas Nº = <?php echo $error1['id'];?></option>
            <?php } ?>
        </select>
        <select required name="busca" name="error">
            <option value="">Error Nº2</option>
            <?php  while($error2 = $sql_query_error2->fetch_assoc()) {  ?>
                <option value=" <?php echo $error2['id']; ?>">Id Respostas Nº = <?php echo $error2['id'];?></option>
            <?php } ?>
        </select>
        <select required name="busca" name="error">
            <option value="">Error Nº3</option>
            <?php  while($error3 = $sql_query_error3->fetch_assoc()) {  ?>
                <option value=" <?php echo $error3['id']; ?>">Id Respostas Nº = <?php echo $error3['id'];?></option>
            <?php } ?>
        </select>
        <select required name="busca" name="error">
            <option value="">Error Nº4</option>
            <?php  while($error4 = $sql_query_error4->fetch_assoc()) {  ?>
                <option value=" <?php echo $error4['id']; ?>">Id Respostas Nº = <?php echo $error4['id'];?></option>
            <?php } ?>
        </select>
    </form>
    <br> 
</body>
</html>


<!-- tela de visualização html -->