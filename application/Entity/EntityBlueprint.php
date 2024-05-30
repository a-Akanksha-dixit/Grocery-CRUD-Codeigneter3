<?php
namespace App\Entity;

use Exception;

class EntityBlueprint
{
    public function __construct($data, $update = false, $requiredFields)
    {
        foreach($requiredFields as $requiredField) {
            if (isset($data[$requiredField])) {
                $this->$requiredField = $data[$requiredField];
            } elseif(!$update) {
                throw new Exception($requiredField . ' is not provided', 400);
            }
        }
        return $this;
    }
}