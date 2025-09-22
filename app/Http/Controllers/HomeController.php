<?php

namespace App\Http\Controllers;

use App\Models\Finalist;
use App\Models\School;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_finalists = Finalist::count();
        $total_universities = School::count();
        $total_users = User::count();
        $total_courses = Course::count();

        return view('_admin.dashboard.crm.index', compact(
            'total_finalists',
            'total_universities',
            'total_users',
            'total_courses'
        ));
    }
}
