<?php
/**
 * Created by PhpStorm.
 * User: rudinAS
 * Date: 03.06.2016
 * Time: 8:12
 */

abstract class BaseController {
    abstract function beforeRoute();
    public function __construct()
    {
        $this->f3 = Base::instance();
        $this->view = new View();
    }
}