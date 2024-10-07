<?php
include("dbconnect.php");

$nome = isset($_POST["nome"]) ? $_POST["nome"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';
$senha = isset($_POST["senha"]) ? $_POST["senha"] : '';
$cep = isset($_POST["CEP"]) ? $_POST["CEP"] : '';
$rua = isset($_POST["rua"]) ? $_POST["rua"] : '';
$bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : '';
$cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : '';
$estado = isset($_POST["estado"]) ? $_POST["estado"] : '';
$escola = isset($_POST["escola"]) ? $_POST["escola"] : '';
$data = isset($_POST["data"]) ? $_POST["data"] : '';
$serie = isset($_POST["serie"]) ? $_POST["serie"] : '';
$sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert = "INSERT INTO usuario (nome_usuario, grau_ensino_usuario, escola_usuario, data_nasc_usuario, CEP_usuario, senha_usuario,
    rua_usuario, bairro_usuario, cidade_usuario, estado_usuario, sexo_usuario, email_usuario) 
    VALUES ('$nome', '$serie', '$escola', '$data', '$cep', '$senha', '$rua', '$bairro', '$cidade', '$estado', '$sexo', '$email')";
    
    $executar_insert = mysqli_query($conn, $insert);
    if ($executar_insert) {
        header('Location: paginaInicial.html');
    } else {
        echo "<br><br>Erro ao cadastrar: " . mysqli_error($conn) . "<br><br>";
    }
}
?>
