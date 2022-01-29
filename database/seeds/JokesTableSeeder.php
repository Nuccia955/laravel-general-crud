<?php

use Illuminate\Database\Seeder;
use App\Joke;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jokes = config('jokes');
        foreach($jokes as $joke) {
            $new_joke = new Joke();

            $new_joke->title = $joke['title'];
            $new_joke->body = $joke['body'];
            $new_joke->author = $joke['author'];
            $new_joke->category = $joke['category'];
            $new_joke->likes = $joke['likes'];

            $new_joke->save();
        }
    }
}
