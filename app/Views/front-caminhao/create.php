<!DOCTYPE html>
<html>
<head>
    <title>Novo Caminhão</title>
    <button onclick="window.location.href='<?= base_url('painel') ?>'" type="button" style="background:rgb(255, 0, 0); color: black; padding: 10px; border: none; cursor: pointer; margin-bottom: 10px;">Voltar</button>
    <style>
        body { font-family: Arial; background: #111; color: #eee; }
        form { max-width: 600px; margin: auto; display: flex; flex-direction: column; gap: 10px; }
        input { padding: 8px; }
        label { margin-top: 10px; }
        button { background: #90ee90; color: black; padding: 10px; border: none; cursor: pointer; margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Novo Caminhão</h1>

    <form method="post" action="<?= base_url('caminhao/store') ?>">
        <label>Nome do Veículo: <input type="text" name="nome_veiculo" required></label>
        <label>Placa: <input type="text" name="placa" required></label>
        <label>Cor: <input type="text" name="cor" required></label>
        <label>CRLV Vencimento: <input type="date" name="crlv_vencimento" required></label>
        <label>ANTT: 
            <input type="text" name="antt" maxlength="8" pattern="\d{8}" placeholder="Ex: 12345678" title="Digite 8 números" required>
        </label>
        <label>KM Rodados: <input type="number" name="km_rodados" required></label>
        <label>Seguro: <input type="date" name="seguro" required></label>
        <label>Motorista (opcional): <input type="text" name="motorista"></label>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
