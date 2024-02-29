<?php
if (isset($_POST['check-btn'])) {
    $email = $_POST['saved_email'];
    $password = $_POST['saved_password'];

    $conn = new mysqli("localhost", "root", "", "registerform");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM reg_data WHERE EMAIL = ? AND PASSWORD = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Login successful";
    } else {
        echo "Login not found";
    }

    $stmt->close();
    $conn->close();
}
?>
