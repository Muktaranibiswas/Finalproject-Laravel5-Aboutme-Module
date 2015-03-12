<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('abouts')->delete();

        $abouts = array(
            [
                'id' => 1,
                'title' => 'About Us',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. ',
                'video_url' => 'https://www.youtube.com/watch?v=XodCgpMcilY&spfreload=10',
                'created_by' => 'mukta',
                'modified_by' => 'mukta',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],

        );

        // Uncomment the below to run the seeder
        DB::table('abouts')->insert($abouts);
    }

}