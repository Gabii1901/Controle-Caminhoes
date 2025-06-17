<!DOCTYPE html>
<html>
<head>
    <title>Editar Caminhão</title>
    <style>
        body { font-family: Arial; background: #111; color: #eee; }
        form { max-width: 600px; margin: auto; display: flex; flex-direction: column; gap: 10px; }
        input { padding: 8px; }
        label { margin-top: 10px; }
        button { background: #90ee90; color: black; padding: 10px; border: none; cursor: pointer; margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Editar Caminhão</h1>
    <form method="post" action="<?= base_url('caminhao/update/' . $caminhao['id']) ?>">
        <label>Nome do Veículo: <input type="text" name="nome_veiculo" value="<?= esc($caminhao['nome_veiculo']) ?>" required></label>
        <label>Placa: <input type="text" name="placa" value="<?= esc($caminhao['placa']) ?>" required></label>
        <label>Cor: <input type="text" name="cor" value="<?= esc($caminhao['cor']) ?>" required></label>
        <label>CRLV Vencimento: <input type="date" name="crlv_vencimento" value="<?= esc($caminhao['crlv_vencimento']) ?>" required></label>
        <label>ANTT: <input type="text" name="antt" maxlength="8" pattern="\d{8}" placeholder="Ex: 12345678" title="Digite 8 números" required> </label>
        <label>KM Rodados: <input type="number" name="km_rodados" value="<?= esc($caminhao['km_rodados']) ?>" required></label>
        <label>Seguro: <input type="date" name="seguro" value="<?= esc($caminhao['seguro']) ?>" required></label>
        <label>Motorista (opcional): <input type="text" name="motorista" value="<?= esc($caminhao['motorista']) ?>"></label>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
