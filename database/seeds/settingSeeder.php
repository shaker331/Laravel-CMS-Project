<?php

use Illuminate\Database\Seeder;

class settingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Setting::create([
              'blog_name'=>'shaker Blog',
              'phone'=>'0597108471',
              'blog_email'=>'shaker@gmail.com',
              'address'=>'palestine gaza'


       ]);
    }
}
