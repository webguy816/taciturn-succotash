<?php

class StudlyPerson
{
    var $name; //this is a property
    
    function setName($new_name)
    {
        $this->name = $new_name;
    }
    
    function getName()
    {
        return $this->name;
    }
}