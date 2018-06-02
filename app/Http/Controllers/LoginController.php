<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //
    /**
     * [public loginuser]
     * @Receives useremail and passwords
     * returns
     *      if HR
     *      if Interviewer
     *     if fail
     *
     */
    public function loginuser(Request $request){
      //return $request;
      //dd($request->all());
      if (Auth::attempt([
        'email'=>$request->email,
        'password'=>$request->password
        ]))
        {
        //Gets the details of logged in user
        $user = User::where('email',$request->email)->first();
        //Validates id user is hr or interviewer
        if ($user->is_admin()) {
          //if user is admin/hr
          return "hr";

        }
        //if user in interviewer
        return "interviewer";

      }
      //if authentication not successful
        return "wrong";//Redirect::back()->withInput();



    }
}
