<?php
session_start();
require_once "db_connect.php";

// Protect admin page
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}

// Handle search
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
$submissions = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Analytics
$total = $pdo->query("SELECT COUNT(*) FROM waitlist_submissions")->fetchColumn();
$today = $pdo->query("SELECT COUNT(*) FROM waitlist_submissions WHERE DATE(created_at) = CURDATE()")->fetchColumn();
$unique = $pdo->query("SELECT COUNT(DISTINCT email) FROM waitlist_submissions")->fetchColumn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard | Hydro Welding</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <h2>Hydro Welding Admin Dashboard</h2>
  <a href="logout.php" class="logout-btn">Logout</a>
</header>

<main>
  <div class="stats">
    <div class="card">Total Submissions: <?= $total ?></div>
    <div class="card">Today: <?= $today ?></div>
    <div class="card">Unique Emails: <?= $unique ?></div>
  </div>

  <form method="GET" class="search-form">
    <input type="text" name="search" placeholder="Search name, email, company..." value="<?= htmlspecialchars($search) ?>">
    <button type="submit">Search</button>
    <a href="export_csv.php?search=<?= urlencode($search) ?>" class="export-btn">Export CSV</a>
  </form>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Company</th>
        <th>Message</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($submissions as $row): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['full_name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['phone']) ?></td>
        <td><?= htmlspecialchars($row['company']) ?></td>
        <td><?= htmlspecialchars($row['message']) ?></td>
        <td><?= $row['created_at'] ?></td>
        <td><a href="delete_entry.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this entry?')">🗑️ Delete</a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>
</body>
</html>
