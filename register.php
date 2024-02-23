<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Открываем файл для записи
    $file = fopen("registered_users.txt", "a");

    // Записываем данные в файл
    fwrite($file, "Username: $username, Email: $email, Password: $password\n");

    // Закрываем файл
    fclose($file);

    // Оповещение о успешной регистрации
    echo "Регистрация успешна!";
}
?>
