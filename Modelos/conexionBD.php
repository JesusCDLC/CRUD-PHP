<?php

class ConexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=crud","root","Alberthvps2019");
        return $bd;

    }
    
}