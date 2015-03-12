<?php namespace App\Http\Controllers;

class RegistrationController extends Controller {



    /**
     * Show the application blog to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('students/topu');
    }

}