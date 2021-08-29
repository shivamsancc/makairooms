<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// ===============
use DB;
use App\Next\MSG91;
use Session;
use Illuminate\Http\Request;
// ================
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/checkuser';

    // protected function redirectTo()
	// {
    // 		return '/admin/dashboard';
	// }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data= \App\system::getmasterdata();
        $this->middleware('guest')->except('logout');
    }


    public function showLoginForm()
    {
        return view('auth.login', $this->data);
    }

    public function login(Request $request)
    {   
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'],'status'=>'1')))
        {
            if(auth()->user()->type == 0){
                $userid = auth()->user()->id;
                Session::flash('userid', $userid);
                // return redirect('/loginwizard');
                return redirect()->route('kyconeget');
			}elseif(auth()->user()->type == 1) {
                return redirect()->route('admindashboard');                        
                }elseif(auth()->user()->type == 2) {
            		return redirect()->route('partnerdashboard');
                }elseif(auth()->user()->type == 3) {
                        return redirect('/nextteacher');
                } elseif(auth()->user()->type == 4) {
                    return redirect('/student'); 

                } elseif(auth()->user()->type == 13) {
                    return redirect('/nextroom'); 
                }
        }else{
            return $this->sendFailedLoginResponse($request);
        }
        
    }
}
