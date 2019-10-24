<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Messages;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    public function index(Request $request) {
        $teachers = Teacher::all()->count();
        $students = Student::all()->count();
        $messages = Messages::where('isRead', '=', 0)->get()->count();
        $attendance = Attendance::where('attendance', '=', 0)->get()->count();
        $data = [
            'teachers'=> $teachers,
            'students'=> $students,
            'messages'=> $messages,
            'attendance'=> $attendance,
            'name'=>Session::get('fullName')
        ];
        return view('dashboard.dashboard', ['data'=>$data]);
    }
}
