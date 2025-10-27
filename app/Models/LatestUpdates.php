<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LatestUpdateImages;

class LatestUpdates extends Model
{
    protected $table = 'latest_update';


    public function images(){
        return $this->hasMany(LatestUpdateImages::class, 'update_id', 'id');
    }
}
