<?php namespace App\Http\Controllers;

class EcommerceController extends Controller {

<<<<<<< HEAD
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

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
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function ecommerce()
    {
        return view('ecommerce/index');
    }

}
=======


    public function index()
    {
        return view('ecomm.index');
        //return view('layouts/ecommerce');
    }

}

>>>>>>> afreen
