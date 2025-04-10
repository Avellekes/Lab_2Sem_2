<?php
require_once "db.php";

$cursor = $sessionCollection->find();

$incoming = 0;
$outgoing = 0;

foreach ($cursor as $session) {
    $incoming += $session['incoming'];
    $outgoing += $session['outgoing'];
}

$result = "Загальний вхідний трафік: $incoming МБ\nЗагальний вихідний трафік: $outgoing МБ";

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
