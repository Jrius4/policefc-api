<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'indentifier'=>(int)$user->id,
            'name'=>(string)$user->name,
            'email'=>(string)$user->email,
            'isVerified'=>(int)$user->verified,
            'isAdmin'=>($user->admin==='true'),
            'creationDate'=>isset($user->created_at)?(string)$user->created_at:null,
            'creationDate'=>isset($user->updated_at)?(string)$user->updated_at:null,
        ];
    }
}
