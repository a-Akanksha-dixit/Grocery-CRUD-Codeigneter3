<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use App\Entity\SubjectEntity;
use App\Components\SubjectHelper;

class Subject extends CI_Controller
{
    private $courseService;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->helper = new SubjectHelper;
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
            $subject = new SubjectEntity($data);
            $data = $this->helper->create($subject);
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
            $course = new SubjectEntity($data, true);
            $data = $this->helper->update($courseId, $course);
        } catch(\Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }
    }

    public function view()
    {
        $crud = new grocery_CRUD();
        $output = $crud->set_table('subjects')
            ->required_fields(['subject_name', 'subject_description', 'subject_code'])
            ->fields(['subject_name', 'subject_description', 'subject_code'])
            ->set_theme('datatables')
            ->render();
        $this->load->view('course.php',(array)$output);
    }
}