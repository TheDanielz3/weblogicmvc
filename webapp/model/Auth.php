<?php
class Auth
{



    public $password;
    public $hash;

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

    public function findUserByNameAndPass($username,$password){

    User::find(array('conditions' => array('username = ? AND passoword = ?',$username,$password)));
    }
}
?>

