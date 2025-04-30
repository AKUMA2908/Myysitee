<?php
$login = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$validLogin = 'admin';
$validPassword = 'akuma123';

if ($login === $validLogin && $password === $validPassword) {
    header("Location: adminpanel.html");
    exit;
} else {
    echo "<h2 style='color: red;'>Неверный логин или пароль</h2>";
    echo "<a href='index.html'>Вернуться назад</a>";
}
?>