<?php
/*
* App Core Class
* Creates URL and Loads Core Controller
* URL FORMAT - /controller/method/params
*/

class Core{
    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
       
        return $this->getUrl();
    }

    public function getUrl(){
        echo $_GET['url'];
    }

}

new Core;

?>