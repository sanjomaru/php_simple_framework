<?php

class Pages extends Controller{
    public function __construct(){
        echo "Pages Loaded";
    }

    public function index(){
        $this->view('hellow')
    }

    public function about($id){
        echo "About Page".$id;
    }
 
}

?>