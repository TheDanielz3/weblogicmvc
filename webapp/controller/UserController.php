<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;
use ArmoredCore\Interfaces\ResourceControllerInterface;
use User;
/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 08-04-2017
 * Time: 12:36
 */
class UserController extends BaseController  {
    /**
     * @return mixed
     */
    public function index()
    {
        $users = User::all();
        View::make('user.index', ['users' => $users]);

    }

    public function register(){

        $new = new User();
        $new->username = $_POST["username"];
        $new->password = $_POST["password"];
        $new->fullname = $_POST["fullname"];
        $time= strtotime ( $_POST["datebirth"]);
        $date = date('Y-m-d',$time);
        $new->email = $_POST["password"];
        $new->datebirth = $date;
        $new->save();
        Redirect::toRoute('home/login');
    }

    public function create()
    {
        View::make('user.create');
    }

    /**
     * @return mixed
     */
    public function store()
    {
        // create new resource (activerecord/model) instance
        // your form name fields must match the ones of the table fields
        $user = new User(Post::getAll());

        if($user->is_valid()){
            $user->save();
            Redirect::toRoute('user/index');
        } else {
            // return form with data and errors
            Redirect::flashToRoute('user/create', ['user' => $user]);
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $user = User::find($id);

        \Tracy\Debugger::barDump($user);

        if (is_null($user)) {
            // redirect to standard error page
        } else {
            View::make('user.show', ['user' => $user]);
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            // redirect to standard error page
        } else {
            View::make('user.edit', ['user' => $user]);
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function update($id)
    {
        $user = User::find($id);
        $user->update_attributes(Post::getAll());

        if($user->is_valid()){
            $user->save();
            Redirect::toRoute('user/index');
        } else {
            // return form with data and errors
            Redirect::flashToRoute('user/edit', ['user' => $user], $id);
        }
    }

    /**
     * @param $id
     * @return mixed
     */
   /* public function destroy($id)
    {
        $book = User::find($id);
        $book->delete();
        Redirect::toRoute('book/index');
    }*/
}
