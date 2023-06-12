<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomerce</title>
</head>

<body>
    <h1> Valendo
    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores enviados pelo formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $dataNascimento = $_POST["dataNascimento"];

        // Exibe o nome destacado e confirma os dados
        echo "<p><strong>O nome inserido foi:</strong> <span style='color: blue;'>$nome</span></p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Data de Nascimento:</strong> $dataNascimento</p>";
    }
    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="dataNascimento">Data de Nascimento:</label>
        <input type="date" id="dataNascimento" name="dataNascimento" required><br><br>
        <input type="submit" value="Enviar">
    </form>
</h1>
</body>
</html>
  
