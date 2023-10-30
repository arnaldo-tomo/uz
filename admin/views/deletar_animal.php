<?php
include '../../configs/database.php';
// Verifique se o ID do animal a ser excluído foi passado na URL
if (isset($_GET['id'])) {
    $animal_id = $_GET['id'];



    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Exclua o registro do animal
    $sql = "DELETE FROM animal WHERE id = $animal_id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['error_message'] = "Animal excluído com sucesso.";
        header('Location: verAnimas.php');
    } else {
        echo "Erro ao excluir o animal: " . $conn->error;
    }
} else {
    echo "ID do animal não especificado.";
}
