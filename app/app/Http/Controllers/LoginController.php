<?php

namespace App\Http\Controllers;

use App\Services\auth\LoginService;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;

class LoginController extends Controller
{

    public function index(Request $request) {
        return view('auth.login');
    }

    public function login(Request $request) {
        $response = [];
        if (!$request->has('userName') || !$request->has('password') || !$request->has('type')) {
            $response['error'] = true;
            $response['message'] = 'لطفا تمامی فیلدها را پر نمایید';
        }
         else if ($request->input('type') == 'dGVhY2hlcg==') {
            $teacher = Teacher::where('userName', '=', $request->input('userName'))->first();
            $password = Teacher::select('userPassword')->where('userName', '=', $request->input('userName'))->get();
            $fullName = Teacher::select('fullName')->where('userName', '=', $request->input('userName'))->get();
            if ($teacher === null) {
                $response['error'] = true;
                $response['message'] = 'این نام کاربری اشتباه میباشد';
            } else {
                if ($password[0]['userPassword'] != md5($request->input('password'))) {
                    $response['error'] = true;
                    $response['message'] = 'رمز یا نام کاربری اشتباه میباشد';
                } else {
                    \Illuminate\Support\Facades\Session::put('auth', 'ok');
                    $response['error'] = false;
                    $response['message'] = 'موفقیت آمیز!';
                    $response['user'] = $teacher;
                }
            }

        }
        return response()->json($response, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],JSON_UNESCAPED_UNICODE);

    }
}
