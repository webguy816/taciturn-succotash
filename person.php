<?php

class StudlyPerson //ArrogantCamelCase for ClassNames
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
//According to specs there needs to be a newline at the end of this file
//Always "update from master" to get the current changes
//Merge as needed
//then push it up (submit pull request)
