<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EmailSetting;
use App\Models\SocialMedia;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WebSetting;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'name'      => 'admin',
            'guard_name'=> 'web',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        Role::create([
            'name'      => 'vendor',
            'guard_name'=> 'web',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        Role::create([
            'name'      => 'user',
            'guard_name'=> 'web',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);


        User::factory()->create([
            'name' => 'Admin',
            'mobile' => '01779325718',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('121'),
            'avatar' => '/uploads/users/images/avatar.jpg',
            'role_id' => '1',
            'status' => 'Active',
            'usertype' => 'admin',
        ]);


        WebSetting::create([
            'site_name' => 'Demo Site',
            'site_name_bn' => 'Demo Site',
            'web_url' => 'www.url.com',
        ]);

        SocialMedia::create([
            'name' => 'Facebook',
            'name_bn' => 'Facebook',
            'icon' => 'fas fa-facebook',
            'link' => 'https://www.facebook.com',
            'status' => 'Active',
        ]);

        SocialMedia::create([
            'name' => 'Twitter',
            'name_bn' => 'Twitter',
            'icon' => 'fas fa-twitter',
            'link' => 'https://www.twitter.com',
            'status' => 'Active',
        ]);

        SocialMedia::create([
            'name' => 'Youtube',
            'name_bn' => 'Youtube',
            'icon' => 'fas fa-youtube',
            'link' => 'https://www.youtube.com',
            'status' => 'Active',
        ]);


        EmailSetting::create([
            'smtp_host' => 'mail.domain.com',
            'smtp_port' => '465',
            'smtp_username' => 'info@domain.com',
            'smtp_password' => 'password',
            'from_email' => 'info@domain.com',
            'from_name' => 'Demo',
            'status' => 'Active'
        ]);
    }
}
