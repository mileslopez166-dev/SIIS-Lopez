<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
    return [
        "message" => "Student API Working",
        "students" => [
            ["id" => 1, "name" => "John"],
            ["id" => 2, "name" => "Maria"]
        ]
  ];
}

    public function show($id)
    {
        return [
            "student_id" => $id,
            "status" => "Record Retrieved"

        ];
    }
}