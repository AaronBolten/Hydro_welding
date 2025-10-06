<?php
session_start();
require_once "db_connect.php";
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'] ?? 0;
if ($id) {
    $stmt = $pdo->prepare("DELETE FROM waitlist_submissions WHERE id = :id");
    $stmt->execute([':id' => $id]);
}
header("Location: dashboard.php");
exit;
?>
