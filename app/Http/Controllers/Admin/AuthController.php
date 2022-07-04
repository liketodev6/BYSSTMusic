<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $rules = ([
            'email' => 'required|string|email|max:100',
            'password' => 'required',
        ]);
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back();
        }
//        $credentials = $request->only('email', 'password');
//        if (auth()->attempt($credentials)) {
//            $user = User::query()->where('email', $request->email)->first();
//            if ($user->role == 1) {
//                return redirect()->intended('dashboard')->with('user');
//            } else {
//                return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
//            }
//        }
//        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $data = $request->all();
        $this->create($data);
        return redirect()->route('users');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('admin.dashboard', compact('user'));
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function generatePassword()
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function create(array $data)
    {
        $password = $this->generatePassword();
        $user = User::query()->create([
            'name' => $data['firstName'] . " " . $data['lastName'],
            'email' => $data['email'],
            'password' => Hash::make($password),
        ]);
        $user['pass'] = $password;
        Mail::send('emails_template', compact('user'), function ($message) use ($user) {
            $message->to($user['email'])->subject('User creation');
        });
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

    public function homeDetails()
    {
        $homeDetails['details'] = HomePage::all();
        $homeDetails['slider'] = HomeSlider::all();
        $user = Auth::user();
        return view('homeDetails', compact(['homeDetails', 'user']));
    }
}

