<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    protected $hidden = [
        'password',
    ];

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }
}
