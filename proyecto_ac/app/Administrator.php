<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $table = 'administrators';
    protected $fillable = ['fkPerson', 'businessName', 'numberRegister'];
    
    public function people() {
        return $this->belongsTo('App\Person');
    }
    
    public function employees() {
        return $this->belongsToMany('App\Employee');
    }
    
    public function consortia() {
        return $this->hasMany('App\Consortium');
    }
}
