<?php
/*
* App Core Class
* Creates URL and Loads Core Controller
* URL FORMAT - /controller/method/params
*/

class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
       $url = $this->getUrl();
        
       if(file_exists('../app/controller/'.ucwords($url[0]).'.php')){
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
       }
       require_once('../app/controller/'.$this->currentController.'.php');
       $this->currentController = new $this->currentController;
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        } else {
            return $url = $this->currentController;
        }
    }

}



?>