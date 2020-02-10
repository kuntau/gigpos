<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * Set relationship with User
     */
    public function user()
    {
      return $this->belongsTo('User');
    }
}
