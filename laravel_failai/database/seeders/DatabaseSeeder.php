<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         User::factory(5)->create();
         $user = User::factory()->create([
             'name'=> 'Jonny Bravo',
             'email'=>'jonny@gmail.com'
         ]);
         Listing::factory(6)->create([
             'user_id' =>$user->id
         ]);

//         Listing::create([
//             'title'=>'Laravel Senior Developer',
//             'tags'=> 'Laravel,Javascript',
//             'company'=>'Acme Corp',
//             'location'=>'Boston, MA',
//             'email'=>'email@email.com',
//             'website'=>'https://www.acme.com',
//             'description'=>'Elitr sadipscing feugait intellegebat
//              inani elitr imperdiet cu docendi.'
//         ]);
//
//        Listing::create([
//            'title'=>'Full-Stack Engineer',
//            'tags'=> 'Laravel,api, backend',
//            'company'=>'Stark Industries',
//            'location'=>'Dallas, MA',
//            'email'=>'rufus.walker@example.com',
//            'website'=>'https://www.stark.com',
//            'description'=>'Elitr kolokl feugait intellegebat
//              inani elitr imperdiet cu docendi.'
//        ]);



//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }
}
