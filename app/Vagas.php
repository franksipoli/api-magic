<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    protected $fillable = ['title', 'description', 'local', 'remote', 'type', 'redemagic_id'];

    protected $dates = ['deleted_at'];

    function redemagic() {
        return $this->belongsTo('App\Redemagic');
    }
}
