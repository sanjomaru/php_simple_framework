<?php

/*
* Base controller 
* Loads the models and views
*/

class Controller{
    //load model
    public function  model($model){
        //require model file

        require_once('../app/models/'.$model.'.php');

        return new $model();

    }

    //load views
    public function view($view){
        require_once('../app/models/'.$views.'.php');

        return new $view();
    }
}