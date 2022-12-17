<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Role;
class UserTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
        $staffRole = Role::where('name','staff')->first();

        $admin = Admin::create([
            'admin_name' => 'anhquanadmin',
            'admin_email'=> 'anhquanadmin@gmail.com',
            'admin_phone'=> '0826206225',
            'admin_password'=> md5(123456),
        ]);
        $author = Admin::create([
            'admin_name' => 'anhquanauthor',
            'admin_email'=> 'anhquanadmin@gmail.com',
            'admin_phone'=> '0826206225',
            'admin_password'=> md5(123456),
        ]);
        $staff = Admin::create([
            'admin_name' => 'anhquanstaff',
            'admin_email'=> 'anhquanadmin@gmail.com',
            'admin_phone'=> '0826206225',
            'admin_password'=> md5(123456),
        ]);
        $admin->role()->attach($adminRole);
        $author->role()->attach($authorRole);
        $staff->role()->attach($staffRole);

    }
}
