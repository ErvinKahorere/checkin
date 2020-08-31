<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

   // Auth::loginUsingId($user->id);

   
   protected $redirectTo = 'thank-you';

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
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            // 'email' => ['required', 'string', 'max:255', 'unique:users'],

       //     'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'phone' => $data['phone'],
        //     'location' => $data['location'],
        //     'password' => Hash::make($data['password']),
        // ]);


        


    //    return User::create([
    //     'name' => $data['name'],
    //     'email' => 'no@email.com',
    //     'phone' => $data['phone'],
    //     'location' => $data['location'],
    //     'password' => 'password',
    //         ]);
    

        $user = User::create([
            'name' => $data['name'],
             'email' => 'no@email.com',
             'phone' => $data['phone'],
             'location' => $data['location'],
             'password' => 'password',
         ]);

        $role = Role::select('id')->where('name', 'user')->first();

        $user->roles()->attach($role);
        

        $user->save();


        Auth::loginUsingId($user->id);


    //   echo $user->id;

  //     Auth::loginUsingId($user->id);

   
 // echo $user;

 // return $user;

 


//   $userdata = array(
//     'phone'      => $user->username,
//     'password'      => $user->password
// );

// if ( Auth::attempt($userdata ) ) {
//         return Redirect::to('home');
//     }



       

  //     $time = Carbon::now();

    //   Auth::loginUsingId($user->id);

//        return view('checkin.thank-you', compact('user', 'time'));


return redirect()->route('autologin')->with(['phone'=> $user->phone]);
        

    }
}
