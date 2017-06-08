<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;


class HomeController extends BaseController
{

    public function index(){

        return View::make('home.index');
    }

    public  function topten(){
        return View::make('home.topten');
    }

    public function register(){
        return View::make('home.register');

    }

    public function login(){
        return View::make('home.login');

    }

    public function submitlogin(){
    return View::make('user.submitlogin');
    }
}