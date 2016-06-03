<?php
/**
 * Created by PhpStorm.
 * User: rudinAS
 * Date: 03.06.2016
 * Time: 8:14
 */

abstract class SecureController extends BaseController{
    abstract function index();
    function beforeRoute()
    {
        // тут будет проверяться авторизация абонентов
    }

}