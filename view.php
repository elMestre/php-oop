<?php

class View extends Base
{
    private $model;
    private $controller;

    public function __construct($controller, $model, $uuid)
    {
        parent::__construct("View", $uuid);

        $this->controller = $controller;
        $this->model = $model;
    }

    public function output()
    {
        $buffer = $this->model->uuid . " - " . $this->model->string;

        return sprintf('<p><a href="?click=%s">%s</a></p>', $this->model->uuid, $buffer);
    }
}
