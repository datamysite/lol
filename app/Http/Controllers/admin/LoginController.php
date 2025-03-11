<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(Auth::guard('admin')->check()){
            return redirect(route('admin.dashboard'));
        }else{
            return view('admin.login');
        }
    }

    public function authenticate(Request $request){
        $data = $request->all();
        $response = [];

        if (empty($data['username']) || empty($data['password'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        }else{

            if(Auth::guard('admin')->attempt(['username' => $data['username'], 'password' => $data['password'], 'is_active' => '1'])){

                $response['success'] = true;
                $response['message'] = 'Success!';
            }else{
                $response['success'] = false;
                $response['errors'] = "Incorrect Username or Password";
            }
        }

        echo json_encode($response);
    }

    public function logout(){
        Auth::guard('admin')->logout();

        return redirect(route('admin.login'))->with('success', 'Successfully logged out.');
    }
}
