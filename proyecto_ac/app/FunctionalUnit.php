<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FunctionalUnit extends Model {

    protected $table = 'functionalunits';
    protected $fillable = [ 'unitFunctional', 'fkConsortium', 'denomination', 'footage', 'coefficient'];

    public function people() {
        return $this->belongsToMany('App\Person');
    }
    
    public function expenses() {
        return $this->hasMany('App\Expense');
    }
    
    public function consortia() {
        return $this->belongsToMany('App\Consortium');
    }
}
