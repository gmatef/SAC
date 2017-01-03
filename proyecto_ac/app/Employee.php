<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    protected $table = 'employees';
    protected $fillable = ['fkPerson', 'file'];

    public function people() {
        return $this->hasMany('App\Person');
    }
    
    public function administrators() {
        return $this->belongsToMany('App\Administrator');
    }
    
    public function consortia()
    {
        return $this->belongsTo('App\Consortium');
    }
}
