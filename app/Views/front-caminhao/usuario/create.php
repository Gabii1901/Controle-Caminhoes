<!DOCTYPE html>
<html>
<head>
    <button onclick="window.location.href='<?= base_url('painel') ?>'" type="button" style="background:rgb(252, 1, 1); color: black; padding: 10px; border: none; cursor: pointer; margin-bottom: 10px;">Voltar</button>
    <title>Cadastrar Usuário</title>
    <style>
        body { font-family: Arial; background: #111; color: #eee; }
        form { max-width: 400px; margin: auto; padding-top: 50px; display: flex; flex-direction: column; gap: 10px; }
        input, select { padding: 8px; }
        button { background: #90ee90; color: black; padding: 10px; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2 style="text-align:center">Cadastrar Novo Usuário</h2>
    <form method="post" action="<?= base_url('usuario/store') ?>">
        <input type="text" name="cpf" placeholder="CPF" required>
        <input type="text" name="nome" placeholder="Nome completo" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <select name="tipo" required>
            <option value="user">Usuário</option>
            <option value="admin">Administrador</option>
        </select>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>