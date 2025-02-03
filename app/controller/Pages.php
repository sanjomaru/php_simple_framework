<?php

class Pages extends Controller{


    public function __construct(){
    
    }

    public function index(){
        $data = [
            'title' => 'Home'
        ];
        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About'
        ];
        $this->view('pages/about', $data);
    }

    public function contact(){
        $data = [
            'title' => 'Contact Us'
        ];
        $this->view('pages/contact-us', $data);
    }

    public function pdopractice(){
        $this->view('pages/pdopractice');
    }
 
}

?>