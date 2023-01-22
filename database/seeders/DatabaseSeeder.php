<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // insert sample user as the system admin
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@infotech.com',
            'password'=>'admin123',
            'position_title' => 'sales manager',
            'is_admin' => 1,
            'is_active' => 1
        ]);
        // insert the initial permissions
        $permissions = [];
        foreach (config('seed_data.permissions') as $value) {
            $permissions[] = \Spatie\Permission\Models\Permission::create(['name' => $value]);
        }
        // insert the system main email into settings table
        foreach (config('seed_data.settings') as $key => $value) {
            DB::table('setting')->insert([
                'setting_key' => $key,
                'setting_value' => $value
            ]);
        }
    }
}
