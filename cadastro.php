<?php include_once("includes/header.php") ?>
    <main class="corpo">
        <section class="caixa">
            <form action="formulario.php" method="POST">

                <div class="formulariocadastro">
                    <label for="nome" class="cadastro cadastro--cliente">Nome </label>
                    <input class="input-padrao" type="text" name="nome" placeholder="insira seu nome aqui...">
                </div>

                <div class="formulariocadastro">
                    <label for="celular" class="cadastro cadastro--cliente">Celular</label>
                    <input class="input-padrao" type="text" name="celular" placeholder="(xx) xxxxx-xxxx ">
                </div>
                <div class="formulariocadastro">
                    <label for="telefone" class="cadastro cadastro--cliente">Telefone fixo</label>
                    <input class="input-padrao" type="text" name="telefone" placeholder="xxxx-xxxx">
                </div>
                <div class="formulariocadastro">
                    <label for="email" class="cadastro cadastro--cliente">Email </label>
                    <input class="input-padrao" name="email" type="email" placeholder="Seudominio@gmail.com...">
                </div>

                <button class="enviar" value="Enviar">Enviar</button>

            </form>
        </section>
    </main>

<?php include_once("includes/footer.php");