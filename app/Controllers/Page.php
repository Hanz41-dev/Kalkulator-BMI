<?php

namespace App\Controllers;

class Page extends BaseController{

        public function openMaleBMI()
        {
                echo view('maleBMI');
        }
        public function openFemaleBMI()
        {
                echo view('femaleBMI');
        }
}