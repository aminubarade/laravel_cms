<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pages')->truncate();

        DB::table('pages')->insert([
        	 [
                'title' => 'About',
                'uri' => 'about',
                'content' => 'This is the About Page'
            ],
             [
                'title' => 'Contact',
                'uri' => 'contact',
                'content' => 'This is the Contact page'
            ],
             [
                'title' => 'FAQ',
                'uri' => 'faq',
                'content' => 'This is the FAQ page'
            ],
             [
                'title' => 'Team',
                'uri' => 'team',
                'content' => 'This is the team page'
            ],

        ]);
    }
}
