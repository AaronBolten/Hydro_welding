<?php
require __DIR__ . '/vendor/autoload.php';

// Set up Google Client
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/credentials.json');
$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);

$service = new Google_Service_Sheets($client);

// Replace with your actual spreadsheet ID (from the URL)
$spreadsheetId = "1ZjyappvYfrDfUh7mFslaH80E7_NlHgEax040TLxSglw";
$range = "Sheet1!A:F"; // Assuming columns: Timestamp, Name, Email, Phone, Company, Message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone   = htmlspecialchars(trim($_POST["phone"]));
    $company = htmlspecialchars(trim($_POST["company"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($phone)) {
        die("❌ Invalid form input.");
    }

    if (!file_exists(__DIR__ . '/credentials.json')) {
       die("❌ Missing credentials.json file for Google API.");
    }

    // Row data
    $values = [
        [date("Y-m-d H:i:s"), $name, $email, $phone, $company, $message]
    ];

    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);

    $params = [
        'valueInputOption' => 'RAW'
    ];

    try {
        $service->spreadsheets_values->append(
            $spreadsheetId,
            $range,
            $body,
            $params
        );
        echo json_encode(["status" => "success", "message" => "Thank you, $name! You’ve been added to the waiting list."]);
    } catch (Exception $e) {
        echo "❌ Error: " . $e->getMessage();
    }
}
?>
