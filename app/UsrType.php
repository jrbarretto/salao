<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsrType extends Model
{
    protected $table = 'usrtypes';

    //
    protected $fillable = [
        'name',
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}
