<?php
require_once './controllers/ProfileController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $path = $_SERVER['REQUEST_URI'];

    if ($path === '/api/profile-update') {
        ProfileController::updateProfile();
    }
}
