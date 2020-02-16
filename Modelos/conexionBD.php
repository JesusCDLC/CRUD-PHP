<?php

class ConexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=crud","root","mysql");
        return $bd;

    }
    
}