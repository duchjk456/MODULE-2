<?php

class Person
{
    var $name;
    function __construct($personsName)
    {$this->name=$personsName;
    }

    function setName($new_name)
    {
        $this->name = $new_name;
    }
    function getName(){
        return $this->name;
    }
}
