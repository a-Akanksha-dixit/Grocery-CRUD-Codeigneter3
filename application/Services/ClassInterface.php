<?php
namespace App\Services;

interface ClassInterface {
    // get all courses
    public function getAll():array;

    // get course by id
    public function getById($id):array;

    // save new couse
    public function create($data):bool;

    // edit course details
    public function update(int $id, $data):bool;

    // delete course details
    public function delete(int $id):bool;
}