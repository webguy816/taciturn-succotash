<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EasyStreet\War;

/**
 * Description of Animal
 *
 * @author blucas
 */
interface Singable
{
    public function sing();
}

class Animal implements Singable
{
    protected $name;
    protected $favorite_food;
    protected $sound;
    protected $id;
    
    public static $number_of_animals = 0;
    
    const PI = "3.1415926535898";
    
    function getName()
    {
        return $this->name;
    }
    
    function __construct()
    {
        $this->id = mt_rand(100, 1000000);
        echo $this->id . "has been assigned<br />";
        
        Animal::$number_of_animals++;
    }
    
    public function __destruct()
    {
        echo $this->name . " is being destroyed :(";
    }
    
    function __get($name)
    {
        echo "Asked for " . $name . "<br />";
        return $this->name;  
    }
}
