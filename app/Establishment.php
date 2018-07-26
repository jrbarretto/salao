<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Establishment extends Model
{
    use SoftDeletes;
    
    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
