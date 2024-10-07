<?php
include("dbconnect.php");
session_start();

if (isset($_POST["login"])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    $login = "SELECT * FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'";

    $executar_login = mysqli_query($conn, query: $login);

    if (mysqli_num_rows($executar_login) > 0) {
        $_SESSION['usuario'] = $email; 
        if ($email == 'matheus_cesconetto@estudante.sesisenai.org.br') {
            header('Location: admin-usuario.html');
            exit();
        }
        header("Location: paginaInicial.html");
        exit(); 
    } else {
        echo "<br><br>Erro ao fazer login: Verifique suas credenciais.<br><br>";
    }
}
