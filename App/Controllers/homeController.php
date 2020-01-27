<?php

namespace App\Controllers;

use App\Core\Controller;

class homeController extends Controller
{

    public function __construct()
    {
        
        
    }

    public function index()
    {
        $this->loadTemplate('home',$this->getData());
    }



}
