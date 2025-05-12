<?php
class ProfileController {
    public static function updateProfile() {
        $data = json_decode(file_get_contents("php://input"), true);
        $skill = $data['skill'];
        $phoneNumber = $data['phoneNumber'];
        $yearsOfExperience = $data['yearsOfExperience'];
        $pdf = $data['pdf'];

        echo json_encode([
            "message" => "Profile updated with skill: $skill, phone: $phoneNumber, experience: $yearsOfExperience"
        ]);
    }
}
