<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\StudentInfoService;
use App\Services\GradeService;
use App\Services\MessageService;

class IntegrationController extends Controller
{
    public function index(
        StudentInfoService $greet,
        GradeService $grade,
        MessageService $logger
    ) {
        return [
            "students" => [
                $greet->getStudentInfo(1),
                $greet->getStudentInfo(2),
                $greet->getStudentInfo(3),
            ]
        ];
    }

    public function show($id, StudentInfoService $greet, GradeService $grade)
    {
        return [
            "student" => [
                "student_id" => $id,
                "grade" => $grade->getGrade($id),
                "info" => $greet->getStudentInfo($id),
            ]
        ];
    }

    public function message(MessageService $message)
    {
        return [
            "message" => $message->log("Integration System Active")
        ];
    }
}