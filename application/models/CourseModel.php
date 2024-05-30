<?php
include_once('MyModel.php');

class CourseModel extends MyModel
{
    protected array $viewField = [
        'course_name', 'course_description', 'course_duration', 'course_start_date', 'course_end_date'
    ];

    public function __construct()
    {
        parent::__construct('courses', 'course_id', $this->viewField);
    }
}
