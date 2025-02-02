<?php

class Pages extends Controller{


    public function __construct(){
        $this->postModel = $this->model('Post');
    }

    public function index(){
        $results = $this->postModel->getPost();

        $data = [
            'posts' => $results
        ];

        $this->view('pages/index', $data);
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