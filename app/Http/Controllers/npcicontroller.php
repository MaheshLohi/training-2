<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserRepo;

// use Symfony\Component\VarDumper\Cloner\Data;

class npcicontroller extends Controller
{
    public $obj;
    public $productObj;
    public function __construct(UserRepo $userRepo, ProductList $productClass)
    {
        $this->obj = $userRepo;
        $this->productObj = $productClass;

    }


    public function addUser()
    {
        $name = request('name');
        $email = request('email');
        $phonenumber = request('phonenumber');
        $password = request('password');
        $organisation = request('organization');
        // print_r("hello" .$password );
        $this->obj ->addUser($name, $email, $phonenumber, $password, $organisation);

        return redirect('/')->with('mssg', 'New User created');
    }

    
}
