<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laracasts\Presenter\PresentableTrait;

class Company extends Model
{
    use SoftDeletes;
    use PresentableTrait;

    //
    protected $presenter = \Sys4Beauty\Presenter\CompanyPresenter::class;

    protected $fillable = [
        'name',
    ];

    public function establishments(){
        return $this->hasMany(Establishment::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

}
