<?php

class Pages extends Controller{


    public function __construct(){
    
    }

    public function index(){
        $data = [
            'title' => 'Home',
            'description' => 'Sample Description for Homepage'
        ];
        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About',
            'description' => 'Sample Description for About'
        ];
        $this->view('pages/about', $data);
    }

    public function contact(){
        $data = [
            'title' => 'Contact Us',
            'description' => 'Sample Description for Contact Us'
        ];
        $this->view('pages/contact', $data);
    }

    public function register(){
        $this->view('users/register', $data);
    }

    public function login(){
        $data = [
            'title' => 'Login',
            'description' => 'Sample Description for Login'
        ];
        $this->view('pages/login', $data);
    }

    public function pdopractice(){
        $this->view('pages/pdopractice');
    }
 
}

?>