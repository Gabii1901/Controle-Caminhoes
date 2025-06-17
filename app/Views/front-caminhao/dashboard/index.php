<!DOCTYPE html>
<html>
<head>
    <title>Painel Inicial</title>
    <style>
        body { font-family: Arial; background: #111; color: #eee; text-align: center; padding: 50px; }
        a { display: inline-block; margin: 10px; padding: 10px 20px; background:rgb(255, 0, 0); color: black; text-decoration: none; }
        b { display: inline-block; margin: 10px; padding: 10px 20px; background: #90ee90; color: black; text-decoration: none; }
    </style>
</head>
<body>
    <p>Bem-vindo, <strong><?= session('usuario_nome') ?></strong></p>
    <b href="<?= base_url('caminhao') ?>">Controle de Caminhões</b>
    <?php if (session('tipo') === 'admin'): ?>
        <b href="<?= base_url('usuario/create') ?>">Cadastrar Usuário</b>
    <?php endif; ?>
    <a href="<?= base_url('logout') ?>">Sair</a>
</body>
</html>
