<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Post;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();

        $startimes = new Tag();
        $startimes->name = "STARTIMES";
        $startimes->slug = "startimes";
        $startimes->save();

        $sportbiz = new Tag();
        $sportbiz->name = "SPORTBIZ";
        $sportbiz->slug = "sportbiz";
        $sportbiz->save();

        $winners = new Tag();
        $winners->name = "Winners";
        $winners->slug = "winners";
        $winners->save();

        $victories = new Tag();
        $victories->name = "Victories";
        $victories->slug = "victories";
        $victories->save();

        $tags = [
            $startimes->id,
            $sportbiz->id,
            $winners->id,
            $victories->id
        ];

        foreach (Post::all() as $post)
        {
            shuffle($tags);
            
            for ($i = 0; $i < rand(0, count($tags)-1); $i++)
            {
                $post->tags()->detach($tags[$i]);
                $post->tags()->attach($tags[$i]);
            }
        }
    }
}
