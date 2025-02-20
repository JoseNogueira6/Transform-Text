<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $mensagem = $_POST["mensagem"];
    $acao = $_POST["acao"];

    if ($acao == "MAIÚSCULO") {
        $_SESSION['mensagem_transformada'] = strtoupper($mensagem);
    }
    elseif ($acao == "minúsuculo")
        $_SESSION['mensagem_transformada'] = strtolower($mensagem);
    }   
    
    header("Location: VisualSite.php");
    exit();
?>