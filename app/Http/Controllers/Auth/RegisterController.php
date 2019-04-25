<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'dob' => 'required|date_format:Y-m-d',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'postal' => 'nullable|string|max:15',
            'phone' => 'nullable|digits_between:10,12',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ],[
            'name.required' => 'This field is required',
            'dob.required' => 'This field is required',
            'country.required' => 'This field is required',
            'city.required' => 'This field is required',
            'email.mail' => 'Please enter a valid email',
            'password.min' => 'Password must be at least 6 characters',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'dob' => $data['dob'],
            'country' => $data['country'],
            'city' => $data['name'],
            'address' => $data['name'],
            'postal' => $data['name'],
            'phone' => $data['name'],
            'email' => $data['email'],
            'password' => setPasswordAttribute($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        if (($validator->fails())) {
            return redirect('/signup')->withErrors($validator);
        } else {
            $user = User::create($request->all());
            $user->save();
            Auth::login($user);
            return redirect('/');
        }
    }
}
