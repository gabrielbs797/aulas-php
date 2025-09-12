<?php
    $faculdade = "Fatec Jahu";
?>

<!-- JAMAIS REALIZE "ECHO" ANTES DO "<!DOCTYPE html>"! -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML + PHP</title>
</head>
<body>
    <h1>PHP + HTML</h1>

    <a href="https://fatecjahu.edu.br" target="_blank" class="btn btn-danger">
        <?php echo $faculdade; ?>
    </a>

    <?php
        $local = "Rua Frei Galvão, S/N, Jaú - SP";
        $foto = "http://201.55.33.89/si/2021/0200832111002/assets/img/fatec/fatec_jahu.png";
        $telefone = "(14) 3624-8000";
        $email = "contato@fatecjahu.edu.br";
        // Só é possível incorporar variáveis se elas estiverem entre aspas, não apóstrofos
        $html = "<div class=\"alert alert-danger mx-5\" role='alert'>Teste</div>";
        echo $html;
    ?>

    <div class="card" style="width: 18rem;">
        <img src="<?= $foto ?>" class="card-img-top" alt="<?php echo $faculdade; ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $faculdade ?></h5>
            <p class="card-text"><?= $local ?></p>
            <p class="card-text">
                Telefone:
                <a href="tel:<?= $telefone ?>"><?= $telefone ?></a>
            </p>
            <p class="card-text">
                E-mail:
                <a href="mailto:<?= $email ?>"><?= $email ?></a>
            </p>
            <a href="https://fatecjahu.edu.br" class="btn btn-primary">Ir para o site</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>