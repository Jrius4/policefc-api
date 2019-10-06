<?php

namespace App\SoccerModels;

use Illuminate\Database\Eloquent\Model;

abstract class SuperTeam extends Model
{
    function getTable(){
        return $table='teams';
    }
}
