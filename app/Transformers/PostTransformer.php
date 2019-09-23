<?php

namespace App\Transformers;

use App\Post;
use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Post $post)
    {
        return [
            'indentifier'=>(int)$post->id,
            'title'=>(string)$post->title,
            'slug'=>(string)$post->slug,
            'picture'=>url("img/{$post->image}"),
            'excerpt'=>(string)$post->excerpt,
            'body'=>(string)$post->body,
            'category'=>(int)$post->post_category_id,
            'view_count'=>(int)$post->view_count,
            'creationDate'=>isset($post->created_at)?(string)$post->created_at:null,
            'creationDate'=>isset($post->updated_at)?(string)$post->updated_at:null,
            'publicationDate'=>isset($post->updated_at)?(string)$post->published_at:null,
            'deletionDate'=>isset($post->updated_at)?(string)$post->deleted_at:null,
        ];
    }
}
