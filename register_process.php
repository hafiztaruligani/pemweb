
<?php
include 'connection.php';
$firstname = $_POST['firstName'];
$lastname = ($_POST['lastName']);
$email = $_POST['email'];
$password = ($_POST['password']);
$username = strcmp($firstname,$lastname);

$register   = mysqli_query($conn,"
INSERT INTO users (namaDepan, namaBelakang, email, password, username)
VALUES ($firstname, $lastname, $email, $password, $username)
"
);

?>
