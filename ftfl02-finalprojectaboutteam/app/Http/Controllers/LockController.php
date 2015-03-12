<?php namespace App\Http\Controllers;


class LockController extends Controller {


//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function lock()
    {
        return view('lock/index');
    }

} 