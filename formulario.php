<?php include_once("includes/header.php") ?>
<?php require 'Autoload.php';
$usuario = new \App\Jean\Usuario($_POST['nome'], $_POST['celular'], $_POST['telefone'], $_POST['email']); ?>


<main class="corpo">
    <section class="caixa">
        <p>Dados do Usuário</p>
        <form action="cadastro.php" method="POST">
            <div class="formu">
                <label for="nome" class="cadastro cadastro--cliente">Nome: <?php echo $usuario->getNome(); ?></label>
            </div>
            <div class="formu">
                <label for="email" class="cadastro cadastro--cliente">Usuário: <?php echo $usuario->getUsuario(); ?></label>
            </div>
            <div class="formu">
                <label for="telefone" class="cadastro cadastro--cliente">Celular: <?php echo $usuario->getCelular(); ?></label>
            </div>
            <div class="formu">
                <label for="telefone" class="cadastro cadastro--cliente">Telefone fixo: <?php echo $usuario->getTelefone(); ?></label>
            </div>
            <div class="formu">
                <label for="email" class="cadastro cadastro--cliente">Email: <?php echo $usuario->getEmail(); ?></label>
            </div>
            <button class="enviar" value="Enviar">Finalizar</button>
        </form>
    </section>
</main>

<?php include_once("includes/footer.php");
