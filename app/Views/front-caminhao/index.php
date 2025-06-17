<!DOCTYPE html>
<html>
<head>
    <title>Lista de Caminhões</title>
    <style>
        body { font-family: Arial; background: #111; color: #eee; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #555; padding: 10px; text-align: left; }
        th { background-color: #222; }
        a, button { background: #90ee90; color: black; padding: 5px 10px; text-decoration: none; border: none; cursor: pointer; margin-right: 5px; }
    </style>
</head>
<body>
    <h1>Controle de Caminhões</h1>
    <a href="<?= base_url('caminhao/create') ?>">Novo Caminhão</a>
    <table>
        <tr>
            <th>Veículo</th><th>Placa</th><th>Cor</th><th>CRLV</th><th>ANTT</th><th>KM</th><th>Seguro</th><th>Motorista</th><th>Ações</th>
        </tr>
        <?php foreach ($caminhoes as $c): ?>
        <tr>
            <td><?= esc($c['nome_veiculo']) ?></td>
            <td><?= esc($c['placa']) ?></td>
            <td><?= esc($c['cor']) ?></td>
            <td><?= esc($c['crlv_vencimento']) ?></td>
            <td><?= esc($c['antt']) ?></td>
            <td><?= esc($c['km_rodados']) ?></td>
            <td><?= esc($c['seguro']) ?></td>
            <td><?= esc($c['motorista']) ?></td>
            <td>
                <a href="<?= base_url('caminhao/edit/' . $c['id']) ?>">Editar</a>
                <form action="<?= base_url('caminhao/delete/' . $c['id']) ?>" method="post" style="display:inline" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
