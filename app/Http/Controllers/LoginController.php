<?php 
namespace App\Http\Controllers;

use App\services\LoginServices;
use Exception;
// use Illuminate\Http\Request;

class LoginController extends Controller {
    public $apiCall;
    public function __construct(LoginServices $apiCall) {
        $this->apiCall = $apiCall;
    }

    public function login(){
        $user = $this->apiCall->loginApi();
        try {
            session(['user' => $user->data]);
            return redirect(('/profile'));
        } catch(Exception $e) {
            print_r($user);
            // return view('error',['error'=>'Unable to login please try after sometime']);
        }
    }

    public function logout()
    {
        $user = session('user');
        //print_r($user->email);
       try{
        $this->apiCall->logoutApi($user->email, $user->token);
        return redirect('/login')->with('alert', 'Logged out successfully');
       }catch(Exception $e){
           print_r("An error has occured");
        //    return view('error',['error'=>'An error occured']);
       }
    }
    public function userHome()
    {
        if (!session('user')) {
            return redirect('/login');
        } else {
            $userData = session('user');
            return view('user_home', ['user' => $userData]);
        }
    }
}
?>