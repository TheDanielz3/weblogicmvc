<?php
class Auth
{



    public $hash;
    public $new ;
    private $USERID;
    private $Admin;
    private $isBlocked;
    private $user;
    private $email;
    private $nome_completo;


    public function isAdmin(){
        return $this->Admin;
    }

    public function userId(){
        return $this->USERID;
    }

    public function isBlocked(){
        return $this->isBlocked;
    }
    public function username(){
        return $this->user;
    }
    public function email(){
        return $this->email;
    }
    public function nomeCompleto(){
        return $this->nome_completo;
    }

     public  function findUserByID($id){
         if (User::find(array('conditions' => 'id = ?' , $id))!=null){
             $user = User::find(array('conditions' => array('id = ?' , $id)));

             return $user;

         }
     }

    public function findUserByNameAndPass($username,$password){

       $password= sha1($password);

            if (User::find(array('conditions' => array('username = ? AND password = ?',$username,$password)))!= null){

                    $user = User::find(array('conditions' => array('username = ? AND password = ?',$username,$password)));



              return $user;
            }else{
                return ;
            }
    }
}
?>

