<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="respexer2.php" method="POST">
        <?php 
            echo "<input type='number' name='valor'>";
            echo "<input type='number' name='valor2'>";
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>