<!DOCTYPE html>
<html>
<head>
    <title>Painel Inicial</title>
    <style>
        body { 
            font-family: Arial; 
            background: #111; 
            color: #eee; 
            text-align: center; 
            padding: 50px; 
        }
        a { 
            display: inline-block; 
            margin: 10px; 
            padding: 10px 20px; 
            background: #90ee90; 
            color: black; 
            text-decoration: none; 
            font-weight: bold;
            border-radius: 5px;
        }
        a.logout {
            background: red;
            color: white;
        }
        a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <p>Bem-vindo, <strong><?= session('usuario_nome') ?></strong></p>

    <a href="<?= base_url('caminhao') ?>">Controle de Caminhões</a>

    <?php if (session('tipo') === 'admin'): ?>
        <a href="<?= base_url('usuario/create') ?>">Cadastrar Usuário</a>
    <?php endif; ?>

    <a class="logout" href="<?= base_url('logout') ?>">Sair</a>
</body>
</html>
