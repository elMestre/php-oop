<?php

include "base.php";

class Model extends Base
{
    public $string;
    public function __construct($uuid)
    {
        parent::__construct("Modelo", $uuid);
        $this->string = "MVC + PHP = Awesome, <br>click here!";
    }
}
