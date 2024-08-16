<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    public function __construct(){
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function credentials(Request $request){
        $user = User::whereHas('profile', function ($query) use ($request) {
            $query->where('dni', $request->dni);
        })->first();

        if ($user) {
            return [
                'email' => $user->email,  // Se necesita el email para la autenticación en Laravel
                'password' => $request->password,
            ];
        }

        return [];
    }
    protected function username(){
        return 'dni';
    }
}
