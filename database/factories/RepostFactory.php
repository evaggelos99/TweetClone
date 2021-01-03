<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class RepostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rePost = new Post();
        $post= Post::find($this->faker->numberBetween(1,150));
        $rePost->repost=1;
        $rePost->content = $post->content;
        $rePost->image = $post->image;
        $rePost->original_post = $post->id;
        $rePost->tag = $post->tag;

        if ($post->tag!=null) {
            $tagIds = [];
            $tagNames = explode('#', $post->tag);
            foreach($tagNames as $tagName) {
                $tag = Tag::firstOrCreate(['context' => $tagName]);
                if ($tag) {
                    $tagIds[]= $tag-> id;
                }
            }
            $rePost->tags()->sync($tagIds);
        }

        $rePost->save();
        return [
            /*'user_id' => $this -> faker -> numberBetween($min=1, $max=10),
            'original_post' => $postId,
            'content' => Post::find($postId)->content,
            'tag' => Post::find($postId)->tag,
            'image' => Post::find($postId)->image,
            'repost' => true,*/
        ];
    }
}
