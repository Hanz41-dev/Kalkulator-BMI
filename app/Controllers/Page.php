<?php

namespace App\Controllers;

class Page extends BaseController
{

        public function openMaleBMI()
        {
                return view('maleBMI');
        }
        public function openFemaleBMI()
        {
                return view('femaleBMI');
        }
}