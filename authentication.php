<?php
// core/authentication.php

require_once 'config/database.php';

class Authentication {
    public static function authenticate_user($username, $password) {
        global $conn;

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            return true;
        } else {
            return false;
        }
    }
    public static function isUserLoggedIn()
    {
        return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
    }
    public static function logout_user() {
        session_destroy();
        unset($_SESSION['loggedin']);
        unset($_SESSION['username']);
    }
}
?>
