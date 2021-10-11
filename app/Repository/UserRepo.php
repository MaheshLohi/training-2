<?php
namespace App\Repository;
use App\Model\User;

class UserRepo {
    public $userModel;
    public function __construct(User $userModel){
        $this->userModel = $userModel;

    }
    
        
    
    public function addUser($name, $email, $phonenumber, $password, $organisation) {
        $this->userModel->name= $name;
        $this->userModel->email= $email;
        $this->userModel->phonenumber= $phonenumber;
        $this->userModel->password= $password;
        $this->userModel->Organization= $organisation;

        $this->userModel->save();
    }
}