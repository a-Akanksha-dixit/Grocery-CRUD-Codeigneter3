<?php
namespace App\Seeder;

Trait Seeder
{
    public function createCourseTable()
    {
        try {
            $query = 'CREATE TABLE courses (
                course_id INT AUTO_INCREMENT PRIMARY KEY,
                course_name VARCHAR(255) NOT NULL,
                course_description TEXT,
                course_duration VARCHAR(15),
                course_start_date TIMESTAMP,
                course_end_date TIMESTAMP,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            );';
            $this->db->query($query);
            return ['success' => true, 'data' => 'table created successfully'];
        } catch(\Exception $e) {
            // print_r($e->getMessage());
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function createSubjectTable()
    {
        try {
            $query = 'CREATE TABLE subjects (
                subject_id INT AUTO_INCREMENT PRIMARY KEY,
                subject_name VARCHAR(255) NOT NULL,
                subject_description TEXT,
                subject_code VARCHAR(50) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            );';
            $this->db->query($query);
            return ['success' => true, 'data' => 'table created successfully'];
        } catch(\Exception $e) {
            // print_r($e->getMessage());
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}