<?php
if (isset($_POST['save'])) {
    $name = trim($_POST['name']);
    $position = $_POST['position'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $errors = [];

    if (empty($name)) {
        $errors[] = "Input Nama belum di isi!";
    }
    if (empty($password)) {
        $errors[] = "Input Password belum di isi!";
    }
    if (empty($confirm_password)) {
        $errors[] = "Input Confirm Password belum di isi!";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Password dan Confirm Password belum sama!";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<br><a href='form.php'>Kembali</a>";
    } else {
        echo "
        <div style='border:1px solid #ccc; padding:15px; background-color:#f9f9f9; width:300px; box-shadow:2px 2px 6px #ccc;'>
            <div style='background-color:#ccc; padding:5px; font-weight:bold;'>Data yang Anda Masukkan!</div>
            <p>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . htmlspecialchars($name) . "</p>
            <p>Position &nbsp;&nbsp;: " . htmlspecialchars($position) . "</p>
            <a href='form.php' title='Back akan kembali ke halaman awal!!!' style='color:purple;'>back</a>
        </div>";
    }
}
?>
