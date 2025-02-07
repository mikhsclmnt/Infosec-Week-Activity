function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUTES, 'UTF-8');
    return $data;
}

$sanitized_name = $sanitized_email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sanitized_name = sanitizeInput ($_POST['name']);
    $sanitized_email = sanitizeInput ($_POST['email']); 
} 
?>