<?php

namespace App\Http\Controllers;

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
    public function index() {
        return view('home');
    }
    public function services(){
        return view('service.services');
    }
    public function order(){
        return view('order.order');
    }
    public function history(){
        return view('history.history');
    }
    public function user(){
        return view('user.user_management');
    }
    public function report(){
        return view('report.customer');
    }
    public function salary_report(){
        return view('report.salary');
    }
    public function service_report(){
        return view('report.service_report');
    }
    public function tracking(){
        return view('tracking');
    }
}
