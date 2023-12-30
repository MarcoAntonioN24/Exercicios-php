<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>    
</head>
<body>
    <div class="container">
        <h2>Exercício 03</h2>
        <?php            
            $n1 = filter_input(INPUT_POST, "numero1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $n2 = filter_input(INPUT_POST, "numero2", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $n3 = filter_input(INPUT_POST, "numero3", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            $media = ($n1 + $n2 + $n3) / 3;
            $media = number_format($media, 2, ",", ".");
        ?>
        <div class="alert alert-danger">
            <?="A  média de $n1 + $n2 + $n3 é igual a $media"?>
        </div>
    </div>
</body>
</html>