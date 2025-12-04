<?php


namespace App\Services;

class StudentInfoService {
    public function getStudentInfo($id) {
        $students = [
            1 => ["name" => "Alice", "age" => "20", "Program" => "BS Info Tecghnology"],
            2 => ["name" => "Bob", "age" => "24", "Program" => "BS Info Tecghnology"],
            3 => ["name" => "Charlie", "age" => "22", "Program" => "BS Info Tecghnology"],
        ];
        
        return $students[$id] ?? null;
    }
       
}