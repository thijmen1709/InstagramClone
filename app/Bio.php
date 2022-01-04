<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{

    protected $fillable = ['bio'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
