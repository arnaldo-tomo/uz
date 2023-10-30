<?php
// Verifique se o ID do animal a ser editado foi passado na URL
if (isset($_GET['id'])) {
    $animal_id = $_GET['id'];

    // Conecte-se ao banco de dados
    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "animal_db";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Recupere os dados do animal
    $sql = "SELECT * FROM animais WHERE id = $animal_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Aqui você pode criar um formulário HTML preenchido com os dados do animal para permitir a edição.
        // Por exemplo:
        echo '<form method="POST" action="salvar_edicao.php">';
        echo 'Nome: <input type="text" name="nome" value="' . $row["nome"] . '"><br>';
        echo 'Descrição: <textarea name="descricao">' . $row["descricao"] . '</textarea><br>';
        // Outros campos do animal
        echo '<input type="hidden" name="id" value="' . $animal_id . '">';
        echo '<input type="submit" value="Salvar Edição">';
        echo '</form>';
    } else {
        echo "Animal não encontrado.";
    }
} else {
    echo "ID do animal não especificado.";
}
