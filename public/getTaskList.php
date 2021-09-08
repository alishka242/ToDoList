<?php

$tasks = "";
$sql = "SELECT * FROM tasks";
$query = $pdo->query($sql);
$row = $query->fetchAll(PDO::FETCH_ASSOC);