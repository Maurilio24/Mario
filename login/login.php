<?php
// Definir el usuario y la contraseña permitidos
$allowed_user = 'examen_parcial2';
$allowed_password = 'Voyporel100';

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar si los datos son correctos
if ($username === $allowed_user && $password === $allowed_password) {
    // Redirigir al archivo HTML deseado
    header('Location: /parcial1');
    exit();
} else {
    // Mostrar un mensaje de error
    echo 'Usuario o contraseña incorrectos.';
}
?>
