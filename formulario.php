<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/cabecalho.css">
    <link rel="stylesheet" href="assets/css/formulario.css">
    <link rel="stylesheet" href="assets/css/rodape.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    <title>Dados Cadastrados</title>
</head>

<body>
    <header class="cabecalho container">
        <div class="cabecalho logo-nome">
            <div class="cabecalho logo">Jean Everton Cadastros</div>
            <nav>
                <ul class="cabecalho cabecalho--navegacao">
                    <li class="cabecalho menu">Home</li>
                    <li class="cabecalho menu">Contato</li>
                    <li class="cabecalho menu">Fale conosco</li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="corpo">
        <section class="caixa">
            <p>Dados do cadastro</p>
            <form action="cadastro.php" method="POST">
                <label for="nome" class="cadastro cadastro--cliente">
                    Nome <input class="input-padrao" type="text" name="nome" placeholder="insira seu nome aqui...">
                </label>
                <label for="telefone" class="cadastro cadastro--cliente">
                    Telefone <input class="input-padrao" type="text" name="telefone" placeholder="(xx) x xxxx - xxxx ">
                </label>
                <label for="email" class="cadastro cadastro--cliente">
                    Email <input class="input-padrao" name="email" type="email" placeholder="Seudominio@gmail.com...">
                </label>
                <button class="enviar" value="Enviar">Finalizar</button>
            </form>
        </section>
    </main>
    <footer>
        <p class="copyright">&copy; Copyright Jean Desenvolvedor Web</p>
    </footer>
</body>

</html>