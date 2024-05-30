<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use App\Entity\CourseEntity;
use App\Components\CourseHelper;

class Course extends CI_Controller
{
    private $courseService;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->helper = new CourseHelper;
    }
    // working
    public function index($skip = 0, $limit = 5)
    {
        $data = $this->helper->getAll($skip, $limit);
        echo json_encode($data);
    }

    public function create()
    {
        try {
            $data = file_get_contents('php://input') ?? null;
            $data = json_decode($data, true);
            $course = new CourseEntity($data);
            $data = $this->helper->create($course);
        } catch(\Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }
    }

    public function update($courseId)
    {
        try {
            $data = file_get_contents('php://input') ?? null;
            $data = json_decode($data, true);
            $course = new CourseEntity($data, true);
            $data = $this->helper->update($courseId, $course);
        } catch(\Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }
    }

    public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

    public function test()
    {
        $crud = new grocery_CRUD();
        $output = $crud->set_table('courses')
            ->required_fields(['course_name', 'course_description', 'course_duration', 'course_start_date', 'course_end_date'])
            ->fields(['course_name', 'course_description', 'course_duration', 'course_start_date', 'course_end_date'])
            ->set_theme('datatables')
            ->render();
        // $output = $crud->render();
        $this->load->view('course.php',(array)$output);
        // print_r($output);
        // die('received');
        // $this->_example_output($output);
    }
}