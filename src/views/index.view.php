<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <title>Capital Aberto Por Dentro</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body class="h-full">
    <div class="min-h-full">
        <div class="mx-32">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">Data</th>
                        <th scope="col" class="px-6 py-3">Sigla</th>
                        <th scope="col" class="px-6 py-3">Insider</th>
                        <th scope="col" class="px-6 py-3">Tipo</th>
                        <th scope="col" class="px-6 py-3">Preço</th>
                        <th scope="col" class="px-6 py-3">Qtd.</th>
                        <th scope="col" class="px-6 py-3">Volume</th>
                        <th scope="col" class="px-6 py-3">Mudança (R$)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($insider_trading_list as $insider_trading) : ?>
                        <tr>
                            <td><?= $insider_trading['date'] ?></td>
                            <td><?= $insider_trading['ticker'] ?></td>
                            <td><?= $insider_trading['insider_name'] ?></td>
                            <td><?= $insider_trading['trade_type'] ?></td>
                            <td><?= $insider_trading['price'] ?></td>
                            <td><?= $insider_trading['quantity'] ?></td>
                            <td><?= $insider_trading['money_amount'] ?></td>
                            <td><?= $insider_trading['change'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>    
</body>
</html>