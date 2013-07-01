<?php

class GalleryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('galleries')->delete();

        Gallery::create(array(
            'user_id' => '1',
            'private' => '0',
        ));
        Gallery::create(array(
            'user_id' => '2',
            'private' => '0',
        ));
    }
}