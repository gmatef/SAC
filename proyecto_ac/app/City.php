<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

    protected $table = 'cities';
    protected $fillable = ['city', 'zipCode', 'fkProvince'];

    public function provinces() {
        return $this->belongsTo('App\Province');
    }

    public function consortia() {
        return $this->hasMany('App\Consortium');
    }

    public function providers() {
        return $this->hasMany('App\Provider');
    }

    public function people() {
        return $this->hasMany('App\Person');
    }

}
