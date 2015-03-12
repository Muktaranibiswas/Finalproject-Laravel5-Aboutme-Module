
<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('teams')->delete();

        $teams = array(
            ['id' => 1, 'name' => 'Nilson Nilson', 'designation' => 'Executive Officer / CEO', 'img_path' => 'www.image.com', 'description' => 'We laid the groundwork for the next lesson by creating all the components required for the frontend to function. We now have data in our database and routes to hit. In the next lesson we’ll get started on the frontend of the site!', 'facebook' => 'www.facebook.com', 'twitter' => 'www.twitter.com', 'linked_in' => 'www.linkedin.com', 'google' => 'www.google.com', 'skype' => 'www.skype.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Nilson mandela', 'designation' => 'Executive Officer ', 'img_path' => 'www.image.com', 'description' => 'We laid the groundwork for the next lesson by creating all the components required for the frontend to function. We now have data in our database and routes to hit. In the next lesson we’ll get started on the frontend of the site!', 'facebook' => 'www.facebook.com', 'twitter' => 'www.twitter.com', 'linked_in' => 'www.linkedin.com', 'google' => 'www.google.com', 'skype' => 'www.skype.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Nilson bob', 'designation' => 'Executive', 'img_path' => 'www.image.com', 'description' => 'We laid the groundwork for the next lesson by creating all the components required for the frontend to function. We now have data in our database and routes to hit. In the next lesson we’ll get started on the frontend of the site!', 'facebook' => 'www.facebook.com', 'twitter' => 'www.twitter.com', 'linked_in' => 'www.linkedin.com', 'google' => 'www.google.com', 'skype' => 'www.skype.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Nilson doe', 'designation' => 'Officer', 'img_path' => 'www.image.com', 'description' => 'We laid the groundwork for the next lesson by creating all the components required for the frontend to function. We now have data in our database and routes to hit. In the next lesson we’ll get started on the frontend of the site!', 'facebook' => 'www.facebook.com', 'twitter' => 'www.twitter.com', 'linked_in' => 'www.linkedin.com', 'google' => 'www.google.com', 'skype' => 'www.skype.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],

        );

        //// Uncomment the below to run the seeder
        DB::table('teams')->insert($teams);
    }

}