<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background: #111; color: #eee; }
        form { max-width: 400px; margin: auto; padding-top: 50px; display: flex; flex-direction: column; gap: 10px; }
        input { padding: 8px; }
        button { background: #90ee90; color: black; padding: 10px; border: none; cursor: pointer; }
        .erro { background: #ff4d4d; color: white; padding: 10px; margin-bottom: 10px; text-align: center; }
    </style>
</head>
<body>
    <h2 style="text-align:center">Login</h2>
    <?php if (session()->getFlashdata('erro')): ?>
        <div class="erro"><?= session()->getFlashdata('erro') ?></div>
    <?php endif; ?>
    <form method="post" action="<?= base_url('login') ?>">
        <input type="text" name="cpf" placeholder="CPF" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>
    <div style="margin-top: 15px; text-align: center;">
    <a href="<?= site_url('register') ?>">Cadastrar-se</a>
</div>
</body>
</html>
