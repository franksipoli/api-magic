<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redemagic extends Model
{
    protected $fillable = ['name', 'email', 'website', 'logo', 'password'];

    protected $hidden = ['password'];

    protected $dates = ['deleted_at'];

    public function vagas()
    {
        return $this->hasMany('App\Vagas');
    }
}
