<?php

namespace Application\Controllers;

use Application\Controllers\Controller;

class Panel extends Controller{
    public function index(){
        return $this->view('panel.index');
    }
}





