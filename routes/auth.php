<?php
// التأكد من أن الـ POST مسموح للمسار
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // مسار /api/reset-password
    if ($_SERVER['REQUEST_URI'] === '/api/reset-password') {
        // استلام البيانات من الطلب
        $data = json_decode(file_get_contents("php://input"));
        $email = $data->email;

        // هنا يمكنك إضافة الكود الخاص بتغيير كلمة المرور أو إرسال البريد الإلكتروني
        echo json_encode(["message" => "Password reset email sent to $email"]);
    }
    // يمكنك إضافة مسارات أخرى مثل /api/verify-code وغيرها
} else {
    // في حالة كانت الطريقة غير مسموحة
    http_response_code(405);  // Method Not Allowed
    echo json_encode(["message" => "Method Not Allowed"]);
}
