<?php
require_once "config.php";

$dbconexao = new conec("localhost", "esul", "root", "");

$conec = $dbconexao->conecxa();

$query = "SELECT * FROM notas";
$result = $conec->query($query);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .passo {
            color: blue;
        }

        .nopasso {
            color: red; 
        }

    </style>
</head>
<body>
<?php foreach ($result as $re): ?>
    <?php $valor = $re['nota']; ?>
    <?php if ($valor > 6): ?>
        <p class='passo'><?php echo $valor; ?></p>
    <?php else: ?>
        <p class='nopasso'><?php echo $valor; ?></p>
    <?php endif; ?>
<?php endforeach; ?>
</body>
</html>


