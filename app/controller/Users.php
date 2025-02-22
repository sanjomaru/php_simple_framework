<?php

class Users extends Controller{
    public function __construct(){

    }

    public function register(){
        //Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Process form
            

            //Sanitze post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'Create An Account',
                'description' => 'You can create your account here',
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            //Validate Email
            if(empty($data['email'])){
                $data['email_err'] = 'Please Enter Email';
            }
            
            //Validate Name
            if(empty($data['name'])){
                $data['name_err'] = 'Please Enter Name';
            }

            //Validate Passowrd
            if(empty($data['password'])){
                $data['password_err'] = 'Please Enter Password';
            }else if(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be greater than 6';
            }

            if(empty($data['confirm_password'])){
                $data['confirm_password_err'] = 'Please Confirm Password';
            }else if($data['password'] != $data['confirm_password']){
                $data['confirm_password_err'] = 'Passwords Do Not Match';
            }

            //Make sure errors are empty
            if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                die('Success');
            }else{
                //load view with errors

                $this->view('users/register', $data);
            }

        } else {
            //Init data
            $data = [
                'title' => 'Create An Account',
                'description' => 'You can create your account here',
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            $this->view('users/register', $data);
        }
    }


    public function login(){
        //Check for POST

         //Sanitze post data
         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Process form

            $data = [
                'title' => 'Login',
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            //Validate Email
            if(empty($data['email'])){
                $data['email_err'] = 'Please Enter Email';
            }
            
             //Validate Email
             if(empty($data['password'])){
                $data['password_err'] = 'Please Enter Password';
            }
            
             //Make sure errors are empty
             if(empty($data['email_err'])&& empty($data['password_err'])){
                die('Success Login');
            }else{
                //load view with errors

                $this->view('users/login', $data);
            }

            $this->view('users/login', $data);
        } else {
            //Init data
            $data = [
                'title' => 'Login',
                'email' =>'',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            $this->view('users/login', $data);
        }
    }
}