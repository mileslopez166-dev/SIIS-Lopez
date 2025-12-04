<?php

namespace App\Services;

class GradeService {    

    public function getGrade($studentId) {
        $grades = [
            1 => 'A = 90%',
            2 => 'B+ = 85%',
            3 => 'A- = 88%',
        ];

        return $grades[$studentId] ?? 'N/A';
    }
};