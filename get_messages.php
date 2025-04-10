<?php
require_once "db.php";

$login = $_GET['login'] ?? '';

$client = $clientCollection->findOne(['login' => $login]);

if ($client) {
    $msg = $client['message'];
    $result = "Повідомлення клієнта $login: $msg";
} else {
    $result = "Клієнта $login не знайдено.";
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
