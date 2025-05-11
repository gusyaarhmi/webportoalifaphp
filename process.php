<?php
// Memasukkan file koneksi database
require_once 'config.php';

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $submit_date = date('Y-m-d H:i:s');
    
    // Membersihkan data untuk mencegah SQL injection
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $phone = $conn->real_escape_string($phone);
    $message = $conn->real_escape_string($message);
    
    // Query SQL untuk menyimpan data ke database
    $sql = "INSERT INTO contacts (name, email, phone, message, submit_date) 
            VALUES ('$name', '$email', '$phone', '$message', '$submit_date')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Menutup koneksi
    $conn->close();
}
?>
