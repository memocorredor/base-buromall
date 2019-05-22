<?php

namespace Buromall\Http\Controllers\Auth;

use Buromall\Models\User;
use Buromall\Models\LocaleCountry;
use Buromall\Models\LocaleState;
use Buromall\Models\LocaleCity;
use Illuminate\Support\Facades\DB;
use Buromall\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Buromall\AppCore\CoreUser;

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
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => 'required|string|max:20|unique:users',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Buromall\User
     */
    protected function create(array $data)
    {
        $data_user = CoreUser::getUser();
        
        $filter_country = $data_user['countrie_code_user'];
        $data_country = LocaleCountry::where('code', $filter_country)->first();

        $filter_city = $data_user['city_user'];
        $data_city = LocaleCity::where('name', $filter_city)->first();

        return User::create([
            'con_newsletter' => $data['newsletter'],
            'status_user_id' => 2,
            'plan_id' => 1,
            'user_invite_id' => 1,
            'gender_id' => $data['gender_id'],
            'relationship_id' => 1,
            'country_id' => $data_country->id,
            'state_id' => $data_city->state_id,
            'city_id' => $data_city->id,
            'zipcode' => $data_user['zip_code_user'],
            'areacode' => $data_user['area_code_user'],
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
