<?php 

namespace App\Controllers;

class HomeController
{
    public function index($data = [])
    {
        return renderView('home');
    }
}