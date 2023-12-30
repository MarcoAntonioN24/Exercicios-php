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
        <div class="container-fluid border border-dark border-3 rounded-3">
            <h2 class="fw-bold text-center my-2">Boas Vindas </h2>
            <form action="destino dos formulários\destino_01.php" method="post">
                <label for="nome" class="form-label fw-bold">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Forneça seu nome" maxlength=50 required>
                <label for="disciplina" class="form-label fw-bold">Disciplina</label>
                <input type="text" id="disciplina" name="disciplina" class="form-control" placeholder="Forneça sua disciplina favorita" maxlength=50 required>
                <button type="submit" class="btn btn-primary my-2 d-block mx-auto w-25">Enviar Dados</button>
            </form>
        </div>
        <div class="container-fluid border border-success border-3 rounded-3 mt-2">
            <h2 class="fw-bold text-center my-2">Número favorito</h2>
            <form action="destino dos formulários\destino_02.php" method="post">
                <label for="numero" class="form-label fw-bold">Número Favorito</label>
                <input type="number" id="numero" name="numero" class="form-control" placeholder="Forneça seu número favorito" min=-9999 max=9999 required>
                <button type="submit" class="btn btn-secondary my-2 d-block mx-auto w-25">Enviar Dados</button>
            </form>
        </div>
        <div class="container-fluid border border-success border-3 rounded-3 mt-2">
            <h2 class="fw-bold text-center my-2">Número ao cubo</h2>
            <form action="destino dos formulários\destino_03.php" method="post">
                <label for="numero" class="form-label fw-bold">Número para ser elevado ao cubo</label>
                <input type="number" id="numero" name="numero" class="form-control" placeholder="Forneça um número qualquer" step="any" required>
                <button type="submit" class="btn btn-dark my-2 d-block mx-auto w-25">Enviar Dados</button>
            </form>
        </div>
        <div class="container-fluid border border-success border-3 rounded-3 mt-2">
            <h2 class="fw-bold text-center my-2">Media de 3 valores</h2>
            <form action="destino dos formulários\destino_04.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="numero1" class="form-label fw-bold">Número</label>
                        <input type="number" id="numero1" name="numero1" class="form-control" placeholder="Forneça um número qualquer" step="any" required>                    
                    </div>
                    <div class="col">
                        <label for="numero2" class="form-label fw-bold">Número</label>
                        <input type="number" id="numero2" name="numero2" class="form-control" placeholder="Forneça um número qualquer" step="any" required>                    
                    </div>
                    <div class="col">
                        <label for="numero3" class="form-label fw-bold">Número</label>
                        <input type="number" id="numero3" name="numero3" class="form-control" placeholder="Forneça um número qualquer" step="any" required>                    
                    </div>
                </div>
                <button type="submit" class="btn btn-warning my-2 d-block mx-auto w-25">Enviar Dados</button>
            </form>
        </div>
        <div class="container-fluid border border-danger border-3 rounded-3 mt-2">
            <h2 class="fw-bold text-center my-2">Número com reajuste</h2>
            <form action="destino dos formulários\destino_05.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="numero" class="form-label fw-bold">Número</label>
                        <input type="number" id="numero" name="numero" class="form-control" placeholder="Forneça um número qualquer" step="any" required>
                    </div>
                    <div class="col">
                        <label for="perc" class="form-label fw-bold">Percentual</label>
                        <input type="number" id="perc" name="perc" class="form-control" placeholder="Forneça o valor do reajuste" min=0 max=100  required>                    
                    </div>                    
                </div>
                <button type="submit" class="btn btn-success my-2 d-block mx-auto w-25">Enviar Dados</button>
            </form>
        </div>
        <div class="container-fluid border border-dark border-3 rounded-3 mt-2">
            <h2 class="fw-bold text-center my-2">Número com desconto</h2>
            <form action="destino dos formulários\destino_06.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="numero" class="form-label fw-bold">Número</label>
                        <input type="number" id="numero" name="numero" class="form-control" placeholder="Forneça um número qualquer" step="any" required>
                    </div>
                    <div class="col">
                        <label for="perc" class="form-label fw-bold">Percentual</label>
                        <input type="number" id="perc" name="perc" class="form-control" placeholder="Forneça o percentual do desconto" min=0 max=100  required>                    
                    </div>                    
                </div>
                <button type="submit" class="btn btn-danger my-2 d-block mx-auto w-25">Enviar Dados</button>
            </form>
        </div>
        <div class="container-fluid border border-dark border-3 rounded-3 mt-2">
            <h2 class="fw-bold text-center my-2">Cálculo da área do retângulo</h2>
            <form action="destino dos formulários\destino_07.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="altura" class="form-label fw-bold">Altura</label>
                        <input type="number" id="altura" name="altura" class="form-control" placeholder="Forneça a altura do retângulo" step="any" min=0 required>
                    </div>
                    <div class="col">
                        <label for="base" class="form-label fw-bold">Base</label>
                        <input type="number" id="base" name="base" class="form-control" step="any" placeholder="Forneça a base do retângulo" min=0 required>          
                    </div>                    
                </div>
                <button type="submit" class="btn btn-info my-2 d-block mx-auto w-25">Enviar Dados</button>
            </form>
        </div>
    </div>
</body>
</html>