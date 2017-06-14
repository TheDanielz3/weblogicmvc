<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;
use ArmoredCore\Interfaces\ResourceControllerInterface;
use Auth;

class UserController extends BaseController  {
    /**
     * @return mixed
     */
    public function index()
    {
        $users = User::all();
        View::make('user.index', ['users' => $users]);

    }

    public function login(){

        $auth = new Auth();
        $user= new User();

        $temp = $auth->findUserByNameAndPass($_POST['username'],$_POST['password']);
        if ($temp->conta_bloqueada == 1){

            $user->username= $temp->username;
            $user->nome_completo= $temp->nome_completo;
            $user->data_nascimento= $temp->data_nascimento;
            $user->email= $temp->email;
            $user->isadmin= $temp->isadmin;

            Redirect::toRoute('home/index');
        }
        else{

            return;
        }
    }

    public function register(){
        $new = new User();

        $new->username = $_POST["username"];

        $pass=$_POST["password"];
        $new->password = sha1($pass);

        $new->nome_completo = $_POST["nome_completo"];

        $time = strtotime(isset($_POST["datebirth"]));
        $date = date('d-m-Y',$time);

        $new->data_nascimento = $date;

        $new->email = $_POST["email"];
        $new->conta_bloqueada = 0;
        $new ->isadmin = 0;
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

    /**
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
    */

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
