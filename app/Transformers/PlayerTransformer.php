<?php

namespace App\Transformers;

use App\SoccerModels\Player;
use League\Fractal\TransformerAbstract;

class PlayerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Player $player)
    {
        return [
            'indentifier'=>(int)$player->id,
            'firstname'=>(string)$player->first_name,
            'lastname'=>(string)$player->last_name,
            'picture'=>url("img/players/{$player->profile_pic}"),
            'position'=>(int)$player->player_position_id,
            'foot'=>(int)$player->strong_foot_id,
            'section'=>(int)$player->player_category_id,
            'age'=>(string)$player->age,
            'nationality'=>(string)$player->age,
            'bio'=>(string)$player->age,
            'isAdmin'=>($player->admin==='true'),
            'creationDate'=>isset($player->created_at)?(string)$player->created_at:null,
            'creationDate'=>isset($player->updated_at)?(string)$player->updated_at:null,
        ];
    }
}
