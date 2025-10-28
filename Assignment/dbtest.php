<?php
include 'db.php';

if ($connect) {
    echo "✅ Connected to database.";
} else {
    echo "❌ Failed to connect.";
}
?>
