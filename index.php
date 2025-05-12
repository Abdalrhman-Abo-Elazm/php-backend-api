<?php
// إعدادات الـ CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// التأكد من أن الطلب من نوع POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // استيراد ملفات الـ Routes
    require_once './routes/auth.php';
    require_once './routes/profile.php';
} else {
    // في حالة أي طلب غير الـ POST
    http_response_code(405);  // Method Not Allowed
    echo json_encode(["message" => "Method Not Allowed"]);
}
