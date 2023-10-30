<?php
session_start();
include '../../configs/database.php';
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];

    // Verifica se um arquivo de imagem foi enviado
    if ($_FILES["foto"]["name"]) {
        $foto = $_FILES["foto"]["name"];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);

        // Move o arquivo de imagem para a pasta de uploads
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            // Insere os dados no banco de dados
            $sql = "INSERT INTO animal (nome, descricao, foto) VALUES ('$nome', '$descricao', '$foto')";
            if ($conn->query($sql) === TRUE) {
                echo "Animal cadastrado com sucesso.";
            } else {
                echo "Erro ao cadastrar o animal: " . $conn->error;
            }
        } else {
            echo "Erro ao fazer o upload da imagem.";
        }
    } else {
        echo "Por favor, selecione uma imagem.";
    }
}
