<?php
require_once "db.php";

$clients = $clientCollection->find(['balance' => ['$lt' => 0]]);

$result = "Клієнти з від'ємним балансом:\n";

foreach ($clients as $c) {
    $result .= "- Логін: {$c['login']}, Баланс: {$c['balance']}\n";
}

if ($result === "Клієнти з від'ємним балансом:\n") {
    $result .= "Таких клієнтів немає.";
}

echo "<pre>$result</pre>";
?>

<script>
let history = JSON.parse(localStorage.getItem('history') || '[]');
history.push(<?= json_encode($result) ?>);
if (history.length > 5) history = history.slice(-5);
localStorage.setItem('history', JSON.stringify(history));
</script>

<?php
echo '<a href="index.php">Назад</a>';
?>
