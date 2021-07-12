<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rajasaland";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $nomor_wa = $_POST['nomor'];
    $email = $_POST['email'];
    $rencana_pembayaran = $_POST['metode'];

    $sql = "INSERT INTO user (id, nama, pekerjaan, alamat, nomor_wa, email, rencana_pembayaran)
    VALUES ('', '$nama','$pekerjaan', '$alamat', '$nomor_wa','$email','$rencana_pembayaran')";

    if ($conn->query($sql) === TRUE) {
        header("location: index.php", true, 301);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
