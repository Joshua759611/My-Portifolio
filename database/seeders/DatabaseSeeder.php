<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();
         Listing::factory(6)->create();

         /*Listing::create([
            'title'=>'Android Developer',
            'tags'=>'Kotlin, Jetpack Compose',
            'company'=>'Google Developer Community',
            'location'=>'Chuka, Kenya',
            'email'=>'musyokijoxhua@gmail.com',  
            'website'=>'www.gdsc.org',                                                                                    
            'description'=>'Passionate in Android Development in all aspects of Mobile Development 
            to UI/UX Design of the Application. Dedicated to Mentoring young devs and building the Google 
            Developer Community through speaking in events. Collaborates on open source projects.'
         ]);

         Listing::create([
            'title'=>'MERN Stack Developer',
            'tags'=>'Reactjs, Angular, NodeJs, MongoDB',
            'company'=>'Google Developer Community',
            'location'=>'Chuka, Kenya',
            'email'=>'joshuu@gmail.com', 
            'website'=>'www.gdsc.org',                                                                                               
            'description'=>'Passionate in Web Development in all aspects of Website Development 
            to UI/UX Design of the Web. Dedicated to Mentoring young devs and building the Google 
            Developer Community through speaking in events. Collaborates on open source projects.'
         ]);*/
       
    }
}
