<?php

class Pages extends Controller{
    private $postModel;

    public function __construct(){
        $this->postModel = $this->model('Post');
    }

    public function index(){
       $this->view('pages/index');
    }

    public function about(){
        $this->view('pages/about');
    }

    public function contact(){
        $contacts = ['sanjo', 'maru'];
        $this->view('pages/contact-us', $contacts);
    }

    public function pdopractice(){
        $this->view('pages/pdopractice');
    }
 
}

?>