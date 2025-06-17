<!DOCTYPE html> 
<html>
<head>
    <title>Cadastrar-se</title>
    <style>
        body { font-family: Arial; background: #111; color: #eee; text-align: center; padding-top: 50px; }
        form { max-width: 400px; margin: auto; display: flex; flex-direction: column; gap: 10px; }
        input { padding: 8px; }
        button { background: #90ee90; color: black; padding: 10px; border: none; cursor: pointer; }
        a { color: #90ee90; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Criar Conta</h2>

    <?php if (session()->getFlashdata('msg')): ?>
        <p><?= session()->getFlashdata('msg') ?></p>
    <?php endif; ?>

    <form action="<?= site_url('register') ?>" method="post">
        <input type="text" name="cpf" placeholder="CPF" required>
        <input type="text" name="nome" placeholder="Nome completo" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Cadastrar</button>
    </form>

    <p><a href="<?= site_url('login') ?>">Voltar ao login</a></p>
</body>
</html>
