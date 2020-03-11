<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
Use Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin_home');
    }


 public function passwordchnage()
    {
        return view('auth.passwords.chnagepass');
    }

    public function passupdate(Request $request )
    {

 $validatedData = $request->validate([
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

          $oldpass= $request->oldpass;      
          $userpass =Auth::user()->password;

         if(Hash::check($oldpass,$userpass)){

                $user=Admin::find(Auth::id());
                $user->password=Hash::make($request->password);
                $user->save();
                Auth::logout();
                return Redirect()->route('login')->with('Success','Succesfully change');
              }
              else{
                return Redirect()->back()->with('Error','Pass not correct');
               
              }

    }

}
