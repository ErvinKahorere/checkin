<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $businessRole = Role::where('name', 'business')->first();
        $userRole = Role::where('name', 'user')->first();



        $admin = User::create(
            [ 
                'name' => 'Admin',
                'email' => 'ervinkahorere@gmail.com',
                'phone' => '0813770919',
                'location' => 'Windhoek',
                'password' => Hash::make('password') // password
            ]);


        $business = User::create(
            [ 
                'name' => 'Business',
                'email' => 'my@business.com',
                'phone' => '0813734919',
                'location' => 'Windhoek',
                'password' => Hash::make('password') // password
            ]);

        $user = User::create(
            [ 
                'name' => 'User',
                'email' => 'user@user.com',
                'phone' => '0813790919',
                'location' => 'Windhoek',
                'password' => Hash::make('password') // password
        ]);


    $admin->roles()->attach($adminRole);
    $business->roles()->attach($businessRole);
    $user->roles()->attach($userRole);

    }

         // Default credentials
        // \App\Models\User::insert([
        //     [ 
        //         'name' => 'Admin',
        //         'email' => 'ervinkahorere@gmail.com',
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'gender' => 'male',
        //         'active' => 1,
        //         'remember_token' => Str::random(10)
        //     ]
        // ]);

        // Fake users
       // factory(App\Models\User::class, 9)->create();
}
