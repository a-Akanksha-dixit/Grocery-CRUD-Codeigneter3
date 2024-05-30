<?php
namespace App\Entity;

include_once('EntityBlueprint.php');

class CourseEntity extends EntityBlueprint {

    public int $courseId;
    public string $course_name;
    public string $course_description;
    public string $duration;
    public string $course_start_date;
    public string $course_end_date;
    public string $createdAt;
    public string $updatedAt;
    

    public function __construct($data, $update = false)
    {
        $requiredFields = ['course_name', 'course_description', 'course_duration', 'course_start_date', 'course_end_date'];
        parent::__construct($data, $update, $requiredFields);
        return $this;
    }
}

