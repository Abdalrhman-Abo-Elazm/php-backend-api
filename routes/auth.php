<?php
require_once './controllers/AuthController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $path = $_SERVER['REQUEST_URI'];

    switch ($path) {
        case '/api/reset-password':
            AuthController::resetPassword();
            break;
        case '/api/verify-code':
            AuthController::verifyCode();
            break;
        case '/api/create-account':
            AuthController::createAccount();
            break;
        case '/api/login':
            AuthController::login();
            break;
        case '/api/update-password':
            AuthController::updatePassword();
            break;
    }
}
