<?php
$.sqlite = new SQLite3(".sqlite/agenda.sqlite");
$query = "SELECT * FROM contatos";
$result = $.sqlite->query($query);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Contatos</title>
    <link rel="style.css" href="css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Lista de Contatos</h1>
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetchArray()): ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["nome"] ?></td>
                            <td><?= $row["telefone"] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
