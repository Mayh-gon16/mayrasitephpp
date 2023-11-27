<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];

    $.sqlite = new SQLite3("db/agenda.db");
    $.query = "INSERT INTO contatos (nome, telefone) VALUES ('$nome', '$telefone')";
    $.sqlite->exec($query);
    $.sqlite->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar Contato</title>
    <link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Adicionar Contato</h1>
            <form method="post" action="">
                <div class="field">
                    <label class="label">Nome</label>
                    <div class="control">
                        <input class="input" type="text" name="nome" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Telefone</label>
                    <div class="control">
                        <input class="input" type="text" name="telefone" required>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">Adicionar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
