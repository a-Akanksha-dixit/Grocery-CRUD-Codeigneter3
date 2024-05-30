<?php

namespace App\Components;

use App\Services\ClassInterface;

class Helper implements ClassInterface
{
    private $CI;

    public function __construct($modelName) {
        // get instance of codeigniter,
        ini_set('display_errors', 0);
        $this->CI = & get_instance();
        $this->CI->load->model($modelName);
        $this->model = $this->CI->modelName;
    }

    public function getAll():array
    {
        return $this->model->getAll();
    }

    // save new couse
    public function create($data):bool
    {
        print_r($this->model);
            die('........');
        return $this->model->create($data);
    }

    // edit course details
    public function update($id, $course):bool
    {
        return $this->model->update($id, $course);
    }

    // get course by id
    public function getById($id):array
    {
        return $this->model->getById($id);
    }

    // delete course details
    public function delete($id):bool
    {
        return $this->model->delete($id);
    }

}
