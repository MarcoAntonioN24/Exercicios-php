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
        <h2>Exercício 02</h2>
        <?php            
            $numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_NUMBER_INT);
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
        ?>
        <div class="alert alert-danger">
            <?="Seu número favorito é $numero , seu sucessor é $sucessor e seu antecessor é $antecessor."?>
        </div>
    </div>
</body>
</html>