<?php

class DashboardController extends \BaseController {

    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('auth');
    }

    public function getDashboard() {
        return View::make('layout.dashboard');
    }
}

