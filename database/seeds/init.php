<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserInfo;
use App\Payment;

class init extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'phillip',
            'email' => 'pmadsen2013@gmail.com',
            'password' => bcrypt('mad15696')
        ]);
        $user->isAdmin = 1;
        $user->save();

// $admin  = public_path()."/content/admin";
// $photos  = public_path()."/content/admin/photos";
// if(!file_exists($admin))   \File::makeDirectory(public_path()."/content/admin");
// if(!file_exists($photos))  \File::makeDirectory(public_path()."/content/admin/photos/");
// $moveto = public_path()."/content/admin/photos/phillip.png";
// $copyfrom = public_path()."/img/phillip.png";




        // \File::copy($copyfrom, $moveto);
        UserInfo::create(["user_id" => $user->id, "photo" => "/content/admin/photos/phillip.png"]);
        //init Payment
        Payment::create([
            'stripe_publishable_key' => '',
            'stripe_secret_key' => '',
            'paypal_client_id' => '',
            'paypal_secret' => ''
        ]);
    }
}
