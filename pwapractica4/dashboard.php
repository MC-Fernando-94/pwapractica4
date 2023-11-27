<?php
session_start();
include('backend/auth.php');

if ($_SESSION['role'] == 'teacher') {
    // Mostrar la interfaz para el docente
    include('teacher_dashboard.php');
} elseif ($_SESSION['role'] == 'student') {
    // Mostrar la interfaz para el estudiante
    include('student_dashboard.php');
} else {
    // Redirigir si no hay sesión válida
    header('Location: login.php');
}
?>
