<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;



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
    //protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo()
    {
        $for = ['Administrator' => 'manage',
                'User' => 'Home'
            ];
            return $this->redirectTo = route($for[auth()->user()->roles]);
        }

      /**  protected $redirectTo = '/guide';
        protected function redirectTo()
        {
            if (auth()->user()->roles == 'Administrator') {
                return '/manage';
            }
            return '/guide';
        }
        public function redirectTo() {
            $user = Auth::user();
            if ($user->roles=='Administrator'){
                return '/manage';
            }else{
                return '/guide';
            }
        }*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**protected function authenticated(Request $request, $user)
    {
        if ($user->Roles('Administrator')) {
            return redirect()->route('manage');
        }
    }*/
}
