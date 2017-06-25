<?php
/**
 * Created by PhpStorm.
 * User: ariso
 * Date: 2017-06-19
 * Time: 17:01
 */



use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;

class BackendController extends BaseController
{

    public function index(){
        return View::make('backend.index');
    }


    public  function users(){

        $_SESSION['users'] =  User::all();

        return View::make('backend.users');
    }
    public function edit(){

        $a = new Auth();

        $userid = $_POST['edit'];

        $user = User::find($userid);

        return View::make('backend.edit',['user' =>$user]);

    }
}