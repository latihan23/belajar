<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
public function index(){
    return view('admin.home');
}

public function Logout(){
    Auth::logout();
            $notification =array(
                "massage"=> 'berhasil Kluar',
                'alert-type'=>'berhasil'
            );

            return redirect()->route('admin.login')->with($notification);
}




}
