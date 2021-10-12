<?php
namespace App\Repository;
use App\Model\User;

class UserRepo {
    public $userModel;
    public function __construct(User $userModel){
        $this->userModel = $userModel;

    }
    
        
    
    public function addUser($name, $email, $phonenumber, $password, $organization) {
        $this->userModel->name= $name;
        $this->userModel->email= $email;
        $this->userModel->phonenumber= $phonenumber;
        $this->userModel->password= $password;
        $this->userModel->Organization= $organization;

        $this->userModel->save();
    }
}