<?php
namespace Kmd1992\Biometricfingerprint\Http\Controller;

use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function index(){
        return view('biometricfingerprint::attendance');
    }
}
