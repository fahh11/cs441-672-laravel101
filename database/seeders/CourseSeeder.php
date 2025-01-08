<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // อ่าน file
        $files = ['2560.json' => 2560, '2565.json' => 2565];

        foreach ($files as $file => $content) {
            if ($content == 2560) {
                $courseDataArray = Storage::json('2560.json');
            }
            elseif ($content == 2565) {
                $courseDataArray = Storage::json('2565.json');
            }

            foreach ($courseDataArray as $courseData) {
                Course::create([
                    'curriculum_year' => $content,
                    'code' => $courseData['code'],
                    'thai_name' => $courseData['thai_name'],
                    'eng_name' => trim(str_replace(['(', ')'], '', $courseData['eng_name'])),
                    'thai_description' => $courseData['thai_description'] ?? null,
                    'eng_description' => $courseData['eng_description'] ?? null,
                    'credit' => $courseData['credit'],
                    'lecture_hours' => $courseData['lecture_hours'] ?? null,
                    'practice_hours' => $courseData['practice_hours'] ?? null,
                    'self_study_hours' => $courseData['self_study_hours'] ?? null,
                    'condition' => $courseData['condition'] ?? null,
                ]);
            }
        }
    }
}
