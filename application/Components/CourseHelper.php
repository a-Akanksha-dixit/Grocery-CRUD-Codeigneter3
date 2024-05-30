<?php

namespace App\Components;

use App\Services\ClassInterface;
use App\Components\Helper;

class CourseHelper extends Helper
{

    public function __construct() {
        // get instance of codeigniter,
        parent::__construct('CourseModel');
    }

}
