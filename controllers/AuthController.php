<?php
class AuthController {
    public static function resetPassword() {
        $data = json_decode(file_get_contents("php://input"), true);
        $email = $data['email'];
        echo json_encode(["message" => "Password reset email sent to $email"]);
    }

    public static function verifyCode() {
        $data = json_decode(file_get_contents("php://input"), true);
        $code = $data['code'];
        $email = $data['email'];
        echo json_encode(["message" => "Verification code $code validated for $email"]);
    }

    public static function createAccount() {
        $data = json_decode(file_get_contents("php://input"), true);
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        echo json_encode(["message" => "Account created for $username with email $email"]);
    }

    public static function login() {
        $data = json_decode(file_get_contents("php://input"), true);
        $email = $data['email'];
        $password = $data['password'];
        echo json_encode(["message" => "Logged in with email $email"]);
    }

    public static function updatePassword() {
        $data = json_decode(file_get_contents("php://input"), true);
        $password = $data['password'];
        $confirmPassword = $data['confirmPassword'];

        if ($password === $confirmPassword) {
            echo json_encode(["message" => "Password updated successfully"]);
        } else {
            http_response_code(400);
            echo json_encode(["message" => "Passwords do not match"]);
        }
    }
}
