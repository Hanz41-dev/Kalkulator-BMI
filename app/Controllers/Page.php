<?php

namespace App\Controllers;

class Page extends BaseController
{

        public function openMaleBMI()
        {
                echo "About page";
        }
        public function openFemaleBMI()
        {
                return view('femaleBMI');
        }
}