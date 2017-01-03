<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

    protected $table = 'people';
    protected $fillable = ['firstName', 'lastName', 'paper', 'cuitCuil', 'address', 'fkCity', 'telephone', 'fkTypePerson'];

    public function typepeople() {
        return $this->belongsTo('App\TypePerson');
    }

    public function cities() {
        return $this->belongsTo('App\City');
    }

    public function configurations() {
        return $this->belongsToMany('App\Configuration');
    }

    public function users() {
        return $this->hasOne('App\User');
    }

    public function employees() {
        return $this->belongsTo('App\Employee');
    }

     public function administrators() {
        return $this->hasOne('App\Administrator');
    }
    
    public function functionalunits() {
        return $this->belongsToMany('App\FunctionalUnit');
    }
}
