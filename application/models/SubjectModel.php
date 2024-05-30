<?php
include_once('MyModel.php');

class SubjectModel extends MyModel
{
    protected array $viewField = [
        'subject_name', 'subject_description', 'subject_code'
    ];

    public function __construct()
    {
        parent::__construct('subjects', 'subject_id', $this->viewField);
    }
}