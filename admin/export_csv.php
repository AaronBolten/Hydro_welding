<?php
session_start();
require_once "db_connect.php";
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}

$search = $_GET['search'] ?? '';
$query = "SELECT * FROM waitlist_submissions";
if ($search) {
    $query .= " WHERE full_name LIKE :search OR email LIKE :search OR company LIKE :search OR phone LIKE :search";
}
$query .= " ORDER BY created_at DESC";

$stmt = $pdo->prepare($query);
if ($search) {
    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
}
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=waitlist_export.csv");

$output = fopen("php://output", "w");
fputcsv($output, array("ID", "Full Name", "Email", "Phone", "Company", "Message", "Created At"));
foreach ($results as $row) {
    fputcsv($output, $row);
}
fclose($output);
exit;
?>
