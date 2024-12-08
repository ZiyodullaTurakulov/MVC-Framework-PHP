<?php

namespace App\Controllers;

use App\Core\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        return $this->render('portfolio/index');
    }

    public function contact()
    {
        return $this->render('portfolio/index');
    }
} 