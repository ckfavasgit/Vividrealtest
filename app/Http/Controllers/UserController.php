<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $userWithCompany = Employee::with('company')->get();

        return response()->json($userWithCompany);
        
    }
}
