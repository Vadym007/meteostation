<?php

namespace App\Controllers;

use App\Core\Controller;

class FormController extends Controller
{
    public function show()
    {
        return $this->renderView('form');
    }
}