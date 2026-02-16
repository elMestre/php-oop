<?php

class Controller extends Base
{
    private $model;
    public function __construct($model) {
        parent::__construct("Controller", $model->uuid);

        $this->model = $model;
    }

    public function clicked($uuid) {
        $this->model->string = "Updated Data, thanks to MVC and PHP! received uuid: ".$uuid;
    }
}
