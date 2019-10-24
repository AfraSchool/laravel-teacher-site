<?php

namespace App\Services\auth;

use App\Student;
use App\Teacher;

class LoginService {

    public function getUser($request) {
        $data = [];
        if ($request->input('type') === 'c3R1ZGVudA==') {
            $student = Student::where('userName', '=', $request->input('userName'))->first();
            $password = Student::select('userPassword')->where('userName', '=', $request->input('userName'))->get();
            $data['user'] = $student;
            $data['password'] = $password;
        } else {
            $teacher = Teacher::where('userName', '=', $request->input('userName'))->first();
            $password = Teacher::select('userPassword')->where('userName', '=', $request->input('userName'))->get();
            $data['user'] = $teacher;
            $data['password'] = $password;
        }
        return $data;
    }
}
