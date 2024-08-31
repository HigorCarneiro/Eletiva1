<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta exercício 2</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            try
            {
                $fator1 = $_POST['valor'];
                $fator2 = $_POST['valor2'];
                if($fator1 == $fator2)
                {
                    $triplo_soma = ($fator1 + $fator2) * 3;
                    echo "<p>Triplo da soma: $triplo_soma </p>";
                }
                else
                {
                    $soma = $fator1 + $fator2;
                    echo "<p>Soma: $soma </p>";
                }
            } catch (Exception $e)
            {
                echo "Erro:".$e->getMessage();
            }
        } 
    ?>
</body>
</html>