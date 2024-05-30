<?php
namespace App\Entity;

include_once('EntityBlueprint.php');

class SubjectEntity extends EntityBlueprint {

    public int $subject_id;
    public string $subject_name;
    public string $subject_description;
    public string $subject_code;
    public string $createdAt;
    public string $updatedAt;
    
    public function __construct($data, $update = false)
    {
        $requiredFields = ['subject_name', 'subject_description', 'subject_code'];
        parent::__construct($data, $update, $requiredFields);
        return $this;
    }
}

