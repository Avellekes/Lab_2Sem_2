<?php
require_once "db.php";

echo "<h2>Клієнти (client)</h2>";

$clients = $clientCollection->find();

foreach ($clients as $client) {
    echo "<pre>";
    print_r($client);
    echo "</pre>";
}

echo "<hr>";

echo "<h2>Сеанси (sessions)</h2>";

$sessions = $sessionCollection->find();

foreach ($sessions as $session) {
    echo "<pre>";
    print_r($session);
    echo "</pre>";
}
?>
