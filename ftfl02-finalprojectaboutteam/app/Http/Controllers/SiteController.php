<?php
/**
 * Created by PhpStorm.
 * User: msh
 * Date: 2/6/15
 * Time: 9:29 PM
 */

namespace App\Http\Controllers;


class SiteController extends Controller{
    public function calendar(){
        return view('calendar.view');
    }
    public function inbox(){
        return view('inbox.view');
    }
    public function inbox_inbox(){
        return view('inbox.inbox_inbox');
    }
    public function inbox_compose(){
        return view('inbox.inbox_compose');
    }
    public function inbox_reply(){
        return view('inbox.inbox_reply');
    }
    public function inbox_view(){
        return view('inbox.inbox_view');
    }
    public function ecommerce(){
        return view('ecommerce.view');
    }
}