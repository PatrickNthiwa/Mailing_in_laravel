<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailboxFolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('seed_data.mailbox_folders') as $value) {
            \Illuminate\Support\Facades\DB::table('mailbox_folder')->insert([
                'title' => $value["title"],
                'icon' => $value["icon"]
            ]);
        }
    }
}
