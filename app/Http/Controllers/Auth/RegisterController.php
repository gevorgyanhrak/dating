<?php

namespace App\Http\Controllers\Auth;

use App\Models\Country;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use GeoIp2\Database\Reader;
use Mockery\Exception;

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
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'location' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country_id' => $data['location'],
            'hash' => str_replace('/', '', Hash::make($data['password'].time())),
            'role_id' => 2,
        ]);
    }

    public function signup(Request $request)
    {
//        $reader = new Reader('GeoLite2-Country.mmdb');
//        $record = $reader->country($request->ip());
//        $record = $reader->country('185.8.3.238');
//        $selected_location = $record->country->isoCode;
        $selected_location = 'NL';

        $countries = Country::orderBy('country')->get();
        return view('auth.register')->with(['countries' => $countries, 'selected_location' => $selected_location]);
    }
}
