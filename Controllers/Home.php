<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'SIN 2022-I';
        $this->views->getView('home', "index", $data);
    }
    
}