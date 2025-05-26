<!DOCTYPE html>
<html>
<head>
    <title>2373039-Jenifer Claudia</title>
</head>
<body>

<?php
$name     = $_POST['name'];
$position = $_POST['position'];
$password = $_POST['password'];
$confirm  = $_POST['confirm'];

$errors = [];

if (empty($name)) {
    $errors[] = "Input Nama belum di isi!";
}

if (empty($password)) {
    $errors[] = "Input Password belum di isi!";
}

if (empty($confirm)) {
    $errors[] = "Input Confirm Password belum di isi!";
}

if (!empty($password) && !empty($confirm) && $password !== $confirm) {
    $errors[] = "Password dan Confirm Password belum sama!";
}

if (!empty($errors)) {
    echo "<div style='color: red; font-weight: bold;'>";
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    echo "</div>";
    echo "<br><a href='form.php'>Back</a>";
} else {
    echo "<h3>Data yang Anda Masukkan!</h3>";
    echo "Name     : " . htmlspecialchars($name) . "<br>";
    echo "Position : " . htmlspecialchars($position) . "<br>";
    echo "<br><a href='form.php'>back</a>";
}
?>

</body>
</html>
