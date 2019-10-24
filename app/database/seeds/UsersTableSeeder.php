<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'media' => 'https://i5.walmartimages.ca/images/Large/094/514/6000200094514.jpg',
            'caption' => 'خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر خبر ',
            'date' => '1398',
        ]);
    }
}
