<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Лабораторна робота №2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            padding: 20px;
            text-align: center;
        }
        form {
            background: #fff;
            padding: 15px;
            margin: 15px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
            max-width: 500px;
        }
        select, input[type="submit"] {
            margin-top: 10px;
            padding: 8px;
            width: 80%;
        }
    </style>
</head>
<body>
    <h2>Варіант 8. Облік мережевого трафіку</h2>
    <?php require_once "db.php"; ?>

    <?php
    $clients = $clientCollection->find([], ['projection' => ['login' => 1]]);
    ?>

    <form action="get_messages.php" method="get">
        <label>Оберіть клієнта для перегляду повідомлень:</label><br>
        <select name="login" required>
            <?php foreach ($clients as $c) {
                $login = $c['login'];
                echo "<option value=\"$login\">$login</option>";
            } ?>
        </select>
        <input type="submit" value="Переглянути повідомлення">
    </form>

    <form action="count_traffic.php" method="get">
        <input type="submit" value="Порахувати загальний вхідний та вихідний трафік">
    </form>

    <form action="negative_balance.php" method="get">
        <input type="submit" value="Клієнти з від'ємним балансом">
    </form>

    <div id="cacheResults"></div>
    <button onclick="localStorage.removeItem('history'); location.reload();">Очистити кеш</button>

    <script>
    const cacheDiv = document.getElementById('cacheResults');
    const history = JSON.parse(localStorage.getItem('history') || '[]');

    if (history.length > 0) {
        cacheDiv.innerHTML = "<h3>Останні 5 запитів:</h3>";
        history.reverse().slice(0, 5).forEach((entry, index) => {
            cacheDiv.innerHTML += `<pre><strong>#${index + 1}:</strong>\n${entry}</pre><hr>`;
        });
    } else {
        cacheDiv.innerHTML = "<p>Немає кешованих результатів</p>";
    }
    </script>
