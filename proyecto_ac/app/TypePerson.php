<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePerson extends Model
{
    protected $table = 'typepeople';
    protected $fillable = ['description'];
    
    public function people()
    {
        return $this->hasMany('App\Person');
    }
}
