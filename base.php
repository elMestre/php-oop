<?php

class Base
{
    public function __construct($type = "UNDEFINED", $uuid = NULL) {
        $this->type = $type;
        $this->uuid = $uuid;
        error_log($this->uuid." - ".$this->type." instanciado");
    }

    public function __destruct() {
        error_log($this->uuid." - ".$this->type." MURIO");
    }
}
