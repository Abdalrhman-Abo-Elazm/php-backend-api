<?php
// هذا المسار مجرد مثال آخر
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // مسار /api/profile-update
    if ($_SERVER['REQUEST_URI'] === '/api/profile-update') {
        // استلام البيانات من الطلب
        $data = json_decode(file_get_contents("php://input"));
        $skill = $data->skill;
        $phoneNumber = $data->phoneNumber;
        $yearsOfExperience = $data->yearsOfExperience;

        // هنا يمكنك إضافة الكود الخاص بتحديث الملف الشخصي
        echo json_encode(["message" => "Profile updated with skill: $skill, phone: $phoneNumber, experience: $yearsOfExperience"]);
    }
} else {
    http_response_code(405);  // Method Not Allowed
    echo json_encode(["message" => "Method Not Allowed"]);
}
