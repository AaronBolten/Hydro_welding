<?php echo "PHP is working ✅"; ?>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// ---- Database credentials ----
$host = "localhost";          
$dbname = "hydro_welding_db"; 
$username = "root";           
$password = "";           

// ---- Connect to database (PDO for security) ----
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Database connection failed: " . $e->getMessage());
}

// ---- Only run when form is submitted via POST ----
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // ---- Capture and sanitize input ----
    $full_name = trim($_POST['full_name'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $phone     = trim($_POST['phone'] ?? '');
    $company   = trim($_POST['company'] ?? '');
    $message   = trim($_POST['message'] ?? '');

    // ---- Validate required fields ----
    if (empty($full_name) || empty($email) || empty($phone) || empty($company)) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }

    // ---- Validate email format ----
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address format.'); window.history.back();</script>";
        exit;
    }

    // ---- Insert data into the database ----
    try {
        $stmt = $pdo->prepare("
            INSERT INTO waitlist_submissions (full_name, email, phone, company, message)
            VALUES (:full_name, :email, :phone, :company, :message)
        ");
        $stmt->execute([
            ':full_name' => $full_name,
            ':email'     => $email,
            ':phone'     => $phone,
            ':company'   => $company,
            ':message'   => $message
        ]);

        // ---- Success: show confirmation and redirect ----
        echo "<script>
                alert('Thank you, $full_name! Your submission has been received successfully.');
                window.location.href = 'contact.html';
              </script>";
    } catch (PDOException $e) {
        // ---- Handle duplicate or database errors ----
        if ($e->getCode() == 23000) {
            echo "<script>alert('This email has already been submitted.'); window.history.back();</script>";
        } else {
            echo "<script>alert('Database error: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
        }
    }
} else {
    // ---- Block direct access ----
    echo "Invalid request. Please submit the form correctly.";
}
?>



