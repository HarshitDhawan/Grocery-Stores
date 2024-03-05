<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customers WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['customer_id'] = $row['customer_id'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid username/email or password. Please try again.";
        }
    } else {
        echo "Invalid username/email or password. Please try again.";
    }
}

$conn->close();
?>
