<?php
// namespace App\Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeder extends CI_Controller {
    use App\Seeder\Seeder;
    public function createCourse()
    {
        $result = $this->createCourseTable();
        return $result;
    }

    public function createSubject()
    {
        $result = $this->createSubjectTable();
        return $result;
    }
}