<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //random number that determines if the post will have a tag
        //tag requires controller to act as a pivot table
        //this is not included in the coursework part 1 but will be implemented in part 2
        $tags = array("#gaming", "#cars", "#food", "#fitness", "#news");
        if (rand(0,1)==0) {
            $tag = $tags[array_rand($tags,1)];
            if (rand(0,1)==0) {
                $tag .= $tags[array_rand($tags,1)];
            }
        } else $tag=null;

        if (rand(0,3)) {
            $image = $this -> faker-> image(storage_path('app/public/uploads'),$width = 640, $height = 480, null, false);
            $image='/uploads/' . $image;
        } else $filepath = null;

        //$tagTitle = $tags[array_rand($tags,1)];

        $post = new Post();

        $post->user_id = $this->faker->numberBetween(1,10);
        $post->content = $this->faker->text(100);
        $post->image= $image ?? null;
        $post->repost=0;
        if ($tag!=null) {
            $post->tag = $tag;
        }
        $post->save();


        if ($tag!=null) {
            $tagIds = [];
            $tagNames = explode('#', $tag);
            foreach ($tagNames as $tagName) {
                $tag = Tag::firstOrCreate(['context' => $tagName]);
                if ($tag) {
                    $tagIds[] = $tag->id;
                }
            }
            $post->tags()->sync($tagIds);
        }


        return [
            /*'user_id'=>$this-> faker-> numberBetween(1,10),
            'content' => $this -> faker -> text($maxNbChars = 50),
            'tag' => $tag,
            'image' => $this -> faker -> $image,
            */
        ];
    }
}
