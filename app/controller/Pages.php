<?php

class Pages{
    public function __construct(){
        echo "Pages Loaded";
    }

    public function about($id){
        echo "About Page".$id;
    }
}

?>