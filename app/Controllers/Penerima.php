<?php

namespace App\Controllers;

use App\Models\PenerimaModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Validation\StrictRules\Rules;

class Penerima extends BaseController
{

    public function index()
    {
        echo view('penerima');
    }
    
}




