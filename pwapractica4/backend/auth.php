<?php
session_start();
include('config.php');
include('db.php');
include('teacher.php');
include('student.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($role == 'teacher') {
        $teacher = authenticateTeacher($username, $password);
        if ($teacher) {
            $_SESSION['user_id'] = $teacher['teacher_id'];
            $_SESSION['role'] = 'teacher';
            header('Location: dashboard.php');
        } else {
            echo "Error de autenticación para el docente.";
        }
    } elseif ($role == 'student') {
        $student = authenticateStudent($username, $password);
        if ($student) {
            $_SESSION['user_id'] = $student['student_id'];
            $_SESSION['role'] = 'student';
            header('Location: dashboard.php');
        } else {
            echo "Error de autenticación para el estudiante.";
        }
    }
}
?>
