<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function index()
    {
        if (Auth::user()->is_admin != 1) {
            return redirect()->route('clients.profile');
        }
        return View('admin.index');
    }
}
