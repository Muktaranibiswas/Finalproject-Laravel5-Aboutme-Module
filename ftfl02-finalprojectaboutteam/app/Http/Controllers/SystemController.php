<?php namespace App\Http\Controllers;


class SystemController extends Controller {


//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function system()
    {
        return view('system/index');
    }

}


