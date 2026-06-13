<?php
$db = new SQLite3('members.db');

// read SQL file
$sql = file_get_contents('database.sql');

// execute SQL
$db->exec($sql);

echo "Database created successfully!";
?>