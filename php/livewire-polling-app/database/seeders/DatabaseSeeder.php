<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Comment;
use App\Models\SupportTicket;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->state([
            'first_name'=>'Kel',
            'last_name'=>'Kamara',
            'email'=>'admin@livewireapp.com',
        ])->make();
        $user->save();
        Comment::factory()->for($user)->make()->save();
        SupportTicket::factory()->count(2)->create();
    }
}
