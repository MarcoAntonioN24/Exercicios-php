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
        <h2>Exercício 01</h2>
        <?php            
            $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
            $disciplina = filter_input(INPUT_POST, "disciplina", FILTER_SANITIZE_STRING);            
        ?>
        <div class="alert alert-dark">
        <?php
            print("Olá $nome! Bem-Vindo ao curso de $disciplina!");
        ?>
        </div>
    </div>
</body>
</html>