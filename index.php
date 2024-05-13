<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 08</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php $numero = $_GET['numero'] ?? 64;
        $raizQuadrada = sqrt($numero);
        $raizCubica =  pow($numero, 1 / 3)
        ?>

        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Calcular Raízes">
    </main>

    <section>
        <h2>Resultado Final</h2>
        <p> Analisando o número <strong> <?= $numero ?></strong>, temos: </p>
        <ul>
            <li>A sua raiz quadrada é <strong> <?php echo number_format($raizQuadrada, 3, ',') ?></strong> </li>
            <li> A rua raiz cúbica é <strong> <?php echo number_format($raizCubica, 3, ',') ?></strong> </li>
        </ul>
    </section>
    </form>

</body>

</html>