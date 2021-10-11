<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserRepo;

class npcicontroller extends Controller
{
    public $obj;
    public function __construct(UserRepo $userRepo)
    {
        $this->obj = $userRepo;
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
