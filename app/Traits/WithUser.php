<?php

namespace App\Traits;

use App\Models\User;

trait WithUser
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
