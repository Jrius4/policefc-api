<?php

namespace App\Transformers;

use App\SoccerModels\SupportMember;
use League\Fractal\TransformerAbstract;

class SupportMemberTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(SupportMember $supportMember)
    {
        return [
            'indentifier'=>(int)$supportMember->id,
            'firstname'=>(string)$supportMember->firstname,
            'lastname'=>(string)$supportMember->lastname,
            'picture'=>url("img/{$supportMember->profile_pic}"),
            'position'=>(string)$supportMember->supportMemberPosition->title,
            'bio'=>(string)$supportMember->bio,
            'isExecutive'=>($supportMember->is_executive===SupportMember::Executive_Member),
            'creationDate'=>isset($supportMember->created_at)?(string)$supportMember->created_at:null,
            'creationDate'=>isset($supportMember->updated_at)?(string)$supportMember->updated_at:null,
        ];
    }
}
