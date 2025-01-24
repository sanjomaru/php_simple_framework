<?php

/*
* Base controller 
* Loads the models and views
*/

class Controller{
    //load model
    public function model($model){
        //require model file

        require_once('../app/models/'.$model.'.php');

        return new $model();

    }

    //load views
    public function view($view, $data = []){
    
        if(file_exists('../app/views/'.$view.'.php')){
            require_once('../app/views/'.$view.'.php');
        } else {
            die('View Does Not Exist');
        }
        
    }
}