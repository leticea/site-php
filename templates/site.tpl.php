<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/site.css">
</head>
<body>
    <header id="header">
        <h1>Bem-vindo(a)</h1>
    </header>

    <ul id="nav">
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contato</a></li>
    </ul>

    <main id="content">
        <?php include $content; ?>
    </main>

    <p id="footer"><small><?php echo date('Y') ?> - todos os direitos reservados</small></p>
</body>
</html>
