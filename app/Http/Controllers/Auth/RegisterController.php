<?php

namespace App\Http\Controllers\Auth;

use App\Models\Company;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';    

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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationFormDentalEngineer()
    {
        return view('auth.register_dental_engineer');
    }

    public function showRegistrationFormDentist()
    {
        return view('auth.register_dentist');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        \Log::info("validator start");

        $a =  Validator::make($data, [
            'email' => 'required|string|email|max:255',
            'login_id' => 'required|string|max:25|unique:users',
            'password' => 'required|string|min:6',
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:4',
            'location' => 'string',
            'telephone' => 'string|max:16',
        ]);

        return $a;
    }

    /**
     * Create a new company instance after a valid registration.
     *
     * @param  array  $data
     * @return App\Models\Company
     */
    protected function create(array $data)
    {
        \Log::info("create Company");

        $company = Company::create([
            'email' => $data['email'],
            'name' => $data['name'],
            'type' => $data['type'],
            'location' => $data['location'],
            'telephone' => $data['telephone'],
        ]);

        \Log::info("create User");

        return User::create([
            'company_id' => $company->id,
            'login_id' => $data['login_id'],
            'password' => bcrypt($data['password']),
            'name' => $data['name'],
            'type' => $data['type'],
        ]);
    }
}
