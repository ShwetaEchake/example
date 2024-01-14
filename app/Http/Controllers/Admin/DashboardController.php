<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Holiday;
use App\Models\Punch;
use App\Models\Shift;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ward;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $authUser = auth()->user();
                    
        return view('admin.dashboard');
    }

   
}
